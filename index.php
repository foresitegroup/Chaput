<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    
    <title>Chaput Land Surveys<?php if ($PageTitle != "") echo " | " . $PageTitle; ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Foresite Group">
    
    <meta name="viewport" content="width=device-width">
    <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Titillium+Web:300,400,600,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="inc/main.css">
    
    <script type="text/javascript" src="inc/jquery-1.12.0.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $("a[href^='http'], a[href$='.pdf']").not("[href*='" + window.location.host + "']").attr('target','_blank');

        $(window).scroll(function () {
          if ($(this).scrollTop() > 121) {
            $(".cls-header").addClass("sticky");
          } else {
            $(".cls-header").removeClass("sticky");
          }
        });
      });
    </script>
  </head>
  <body>

  <div class="cls-header">
    <div class="site-width">
      <div class="menu-left"><?php include "menu.php"; ?></div>

      <a href="."><img src="images/logo.png" alt="Chaput Land Surveys"></a>
      
      <label for="show-menu" id="menu-toggle"><i class="fa fa-bars"></i></label>
      <input type="checkbox" id="show-menu" role="button">
      <div class="menu-right"><?php include "menu.php"; ?></div>
    </div>
  </div>

  <div class="rotating">
    <div class="rotating-text">
      ROTATING BANNER (VERTICAL)
    </div>
  </div>

  <div class="header-banner">
    <div class="site-width">
      Chaput Land Surveys offers a wide range of professional land survey services throughout Wisconsin. Whether it’s single site improvement, multiple site acquisition, land development or construction, we will help you be successful in your real estate matters.
    </div>
  </div>

  <div class="site-width">
    THREE COLUMNS (SITE WIDTH)
  </div>

  <hr>

  <div class="site-width">
    AERIAL PHOTOGRAPHY (TWO COL 60/40 SITE WIDTH)<br>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
  </div>

  <hr>

  <div class="site-width">
    COMPANY PROFILE (TWO COL 40/60 SITE WIDTH)<br>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
  </div>
  
  <div class="news-home">
    <div class="site-width">
      BLOG FEATURED (TWO COL FULL WIDTH)
    </div>
  </div>

  <div class="site-width">
    FOOTER CONTACT FORM (35/60 SITE WIDTH)
  </div>

  <div class="footer-menu">
    FOOTER MENU (FULL WIDTH CENTERED)
  </div>

  <div class="cls-footer">
    <img src="images/footer-logo.png" alt="Chaput Land Surveys"><br>

    &copy; <?php echo date("Y"); ?> Chaput Land Surveys, LLC. 234 W. Florida Street, Milwaukee, WI 53204
  </div>
  
  </body>
</html>