<?php
session_start();

$salt = "ForesiteGroupChaputLandSurveys-surveyform";

if ($_POST['confirmationCAP'] == "") {
  if (
      $_POST[md5('companyname' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "" &&
      $_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])] != ""
     )
  {
    $Subject = "Survey Request";
    $SendTo = "patmccurdymusic@gmail.com";
    $Headers = "Bcc: mark@foresitegrp.com\r\n";
    $Headers .= "From: Contact Form <surveyform@chaputlandsurveys.com>\r\n";
    $Headers .= "Reply-To: " . $_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "\r\n";

    $Message = "Message from " . $_POST[md5('companyname' . $_POST['ip'] . $salt . $_POST['timestamp'])] . " (" . $_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])] . ")";

    if (!empty($_POST[md5('orderedby' . $_POST['ip'] . $salt . $_POST['timestamp'])])) $Message .= "\nOrdered By: " . $_POST[md5('orderedby' . $_POST['ip'] . $salt . $_POST['timestamp'])];
    if (!empty($_POST[md5('companyaddress' . $_POST['ip'] . $salt . $_POST['timestamp'])])) $Message .= "\nCompany Address: " . $_POST[md5('companyaddress' . $_POST['ip'] . $salt . $_POST['timestamp'])];
    if (!empty($_POST[md5('citystatezip' . $_POST['ip'] . $salt . $_POST['timestamp'])])) $Message .= "\nCity, State, Zip: " . $_POST[md5('citystatezip' . $_POST['ip'] . $salt . $_POST['timestamp'])];
    if (!empty($_POST[md5('propertyaddress' . $_POST['ip'] . $salt . $_POST['timestamp'])])) $Message .= "\nProperty Address, City: " . $_POST[md5('propertyaddress' . $_POST['ip'] . $salt . $_POST['timestamp'])];

    $Message .= "\n\n" . $_POST[md5('questionscomments' . $_POST['ip'] . $salt . $_POST['timestamp'])];

    $Message = stripslashes($Message);
  
    mail($SendTo, $Subject, $Message, $Headers);
    
    $feedback = "<strong>Your message has been sent!</strong> Thank you for your interest. You will be contacted shortly.";

    if (!empty($_REQUEST['src'])) {
      header("HTTP/1.0 200 OK");
      echo $feedback;
    }
  } else {
    $feedback = "<strong>Some required information is missing! Please go back and make sure all required fields are filled.</strong>";

    if (!empty($_REQUEST['src'])) {
      header("HTTP/1.0 500 Internal Server Error");
      echo $feedback;
    }
  }
}

if (empty($_REQUEST['src'])) {
  $_SESSION['feedback'] = $feedback;
  header("Location: " . $_POST['referrer']);
}
?>