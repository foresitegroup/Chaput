<?php
session_start();

include_once "inc/fintoozler.php";

$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".RECAPTCHA_SECRET_KEY."&response=".$_POST['g-recaptcha-response']);
$responsekeys = json_decode($response);

if ($responsekeys->success) {
  if (
      $_POST['name'] != "" && $_POST['email'] != "" &&
      $_POST['subject'] != "" && $_POST['message'] != ""
     )
  {
    $Subject = $_POST['subject'];
    $SendTo = "don@chaputlandsurveys.com,al@chaputlandsurveys.com,dan@chaputlandsurveys.com,greg@chaputlandsurveys.com";
    $Headers = "From: Contact Form <contactform@chaputlandsurveys.com>\r\n";
    $Headers .= "Reply-To: " . $_POST['email'] . "\r\n";
    $Headers .= "Bcc: foresitegroupllc@gmail.com\r\n";

    $Message = "Message from " . $_POST['name'] . " (" . $_POST['email'] . ")";

    if (!empty($_POST['phone'])) $Message .= "\n" . $_POST['phone'];

    $Message .= "\n" . $_POST['message'];

    $Message = stripslashes($Message);
  
    mail($SendTo, $Subject, $Message, $Headers);
    
    $feedback = "<strong>Your message has been sent!</strong><br>Thank you for your interest. You will be contacted shortly.";
  } else {
    $feedback = "<strong>Some required information is missing! Please go back and make sure all required fields are filled.</strong>";
  }

  echo $feedback;
}
?>