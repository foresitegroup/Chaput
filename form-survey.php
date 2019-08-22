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
$Retorno = $ObjCaptcha->getCaptcha($_POST['g-recaptcha-response']);
if($Retorno->success){
  if ($_POST['companyname'] != "" && $_POST['email'] != "") {
    $Subject = "Survey Request";
    $SendTo = "don@chaputlandsurveys.com,al@chaputlandsurveys.com,dan@chaputlandsurveys.com,greg@chaputlandsurveys.com";
    $Headers = "From: Contact Form <surveyform@chaputlandsurveys.com>\r\n";
    $Headers .= "Reply-To: " . $_POST['email'] . "\r\n";
    $Headers .= "Bcc: foresitegroupllc@gmail.com\r\n";

    $Message = "Message from " . $_POST['companyname'] . " (" . $_POST['email'] . ")";

    if (!empty($_POST['orderedby'])) $Message .= "\nOrdered By: " . $_POST['orderedby'];
    if (!empty($_POST['companyaddress'])) $Message .= "\nCompany Address: " . $_POST['companyaddress'];
    if (!empty($_POST['citystatezip'])) $Message .= "\nCity, State, Zip: " . $_POST['citystatezip'];
    if (!empty($_POST['propertyaddress'])) $Message .= "\nProperty Address, City: " . $_POST['propertyaddress'];

    $Message .= "\n\n" . $_POST['questionscomments'];

    $Message = stripslashes($Message);
  
    mail($SendTo, $Subject, $Message, $Headers);
    
    $feedback = "<strong>Your message has been sent!</strong> Thank you for your interest. You will be contacted shortly.";
  } else {
    $feedback = "<strong>Some required information is missing! Please go back and make sure all required fields are filled.</strong>";
  }

  echo $feedback;
}
?>