<?php
session_start();
if (!isset($TopDir)) $TopDir = "";
if (!isset($FooterForm)) $FooterForm = "";

function email($address, $name="") {
  $email = "";
  for ($i = 0; $i < strlen($address); $i++) { $email .= (rand(0, 1) == 0) ? "&#" . ord(substr($address, $i)) . ";" : substr($address, $i, 1); }
  if ($name == "") $name = $email;
  echo "<a href=\"&#109;&#97;&#105;&#108;&#116;&#111;&#58;$email\">$name</a>";
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>Chaput Land Surveys<?php if ($PageTitle != "") echo " | " . $PageTitle; ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $TopDir; ?>images/favicon.ico">
    <link rel="apple-touch-icon" href="<?php echo $TopDir; ?>images/apple-touch-icon.png">

    <meta name="description" content="<?php if ($Description != "") echo $Description; ?>">
    <meta name="keywords" content="<?php if ($Keywords != "") echo $Keywords; ?>">
    <meta name="author" content="Foresite Group">

    <meta name="viewport" content="width=device-width">
    <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Titillium+Web:300,400,600,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $TopDir; ?>inc/main.css?<?php echo filemtime($TopDir . "inc/main.css"); ?>">

    <script type="text/javascript" src="<?php echo $TopDir; ?>inc/jquery-1.12.0.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $("a[href^='http'], a[href$='.pdf']").not("[href*='" + window.location.host + "']").attr('target','_blank');

        $("#return-to-top").hide();

        $(window).scroll(function () {
          if ($(this).scrollTop() > 121) {
            $(".cls-header").addClass("sticky");
          } else {
            $(".cls-header").removeClass("sticky");
          }

          if ($(this).scrollTop() > 150) {
            $("#return-to-top").fadeIn(500);
          } else {
            $("#return-to-top").fadeOut(500);
          }
        });
      });
    </script>
  </head>
  <body>
  
  <a href="#" id="return-to-top"><i class="fa fa-arrow-up"></i></a>
  
  <div class="cls-header-spacer"></div>

  <div class="cls-header">
    <div class="site-width">
      <div class="menu-left"><?php include "menu.php"; ?></div>

      <a href="<?php echo $TopDir; ?>."><img src="<?php echo $TopDir; ?>images/logo.png" alt="Chaput Land Surveys"></a>

      <input type="checkbox" id="show-menu" role="button">
      <label for="show-menu" id="menu-toggle"></label>
      <div class="menu-right"><?php include "menu.php"; ?></div>
    </div>
  </div>
