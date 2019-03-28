<?php
session_start();

include_once "inc/fintoozler.php";

class Captcha{
  public function getCaptcha($SecretKey){
    $Resposta=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".RECAPTCHA_SECRET_KEY."&response={$SecretKey}");
    $Retorno=json_decode($Resposta);
    return $Retorno;
  }
}

$ObjCaptcha = new Captcha();
$Retorno = $ObjCaptcha->getCaptcha($_POST['g-recaptcha-response-f']);
if($Retorno->success){
  if (
      $_POST['name'] != "" && $_POST['email'] != "" &&
      $_POST['subject'] != "" && $_POST['message'] != ""
     )
  {
    $Subject = $_POST['subject'];
    $SendTo = "don@chaputlandsurveys.com,al@chaputlandsurveys.com,dan@chaputlandsurveys.com,greg@chaputlandsurveys.com";
    $Headers = "From: Contact Form <contactform@chaputlandsurveys.com>\r\n";
    $Headers .= "Reply-To: " . $_POST['email'] . "\r\n";
    $Headers .= "Bcc: mark@foresitegrp.com\r\n";

    $Message = "Message from " . $_POST['name'] . " (" . $_POST['email'] . ")";

    if (!empty($_POST['phone'])) $Message .= "\n" . $_POST['phone'];

    $Message .= "\n" . $_POST['message'];

    $Message = stripslashes($Message);
  
    mail($SendTo, $Subject, $Message, $Headers);
    
    $feedback = "<strong>Your message has been sent!</strong> Thank you for your interest. You will be contacted shortly.";
  } else {
    $feedback = "<strong>Some required information is missing! Please go back and make sure all required fields are filled.</strong>";
  }

  echo $feedback;
}
?>