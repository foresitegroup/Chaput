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

  <div class="cls-header">
    <div class="site-width">
      <div class="menu-left"><?php include "menu.php"; ?></div>

      <a href="."><img src="images/logo.png" alt="Chaput Land Surveys"></a>

      <input type="checkbox" id="show-menu" role="button">
      <label for="show-menu" id="menu-toggle"></label>
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
      Chaput Land Surveys offers a wide range of professional land survey services throughout Wisconsin. Whether it's single site improvement, multiple site acquisition, land development or construction, we will help you be successful in your real estate matters.
    </div>
  </div>

  <div class="home-services site-width">
    <div class="one-third">
      <div class="title">REAL ESTATE DUE DILIGENCE</div>

      <img src="images/services-real-estate.jpg" alt="">

      <ul>
        <li>ALTA/NSPS Land Title Surveys</li>
        <li>Topographic Surveys</li>
        <li>Flood Hazard Surveys</li>
        <li>Infrastructure Surveys</li>
        <li>As-Built Surveys</li>
        <li>Annexation and Zoning</li>
        <li>Easement Legal Descriptions &amp; Exhibits</li>
        <li>Hydrographic Surveys</li>
        <li>Right of Way Surveys</li>
      </ul>
    </div>

    <div class="one-third">
      <div class="title">DEVELOPMENT</div>

      <img src="images/services-development.jpg" alt="">

      <ul>
        <li>ALTA/NSPS Land Title Surveys</li>
        <li>Topographic Surveys</li>
        <li>Flood Hazard Surveys </li>
        <li>Concept Development</li>
        <li>Annexation &amp; Zoning Land Divisions (Subdivisions, Certified Survey Map)</li>
        <li>Condominium Platting</li>
        <li>Easement Legal Descriptions &amp; Exhibits</li>
      </ul>
    </div>

    <div class="one-third last">
      <div class="title">CONSTRUCTION</div>

      <img src="images/services-construction.jpg" alt="">

      <ul>
        <li>Construction Layout</li>
        <li>Construction Site</li>
        <li>Control Surveys</li>
        <li>As-Built Surveys</li>
        <li>Easement Legal</li>
        <li>Descriptions &amp; Exhibits</li>
      </ul>
    </div>

    <div class="button">
      <a href="#">ABOUT OUR SERVICES</a>
    </div>
  </div>

  <hr>

  <div class="site-width">
    <div class="fifty-four">
      <img src="images/uav-aerial-photography.jpg" alt="">
    </div>

    <div class="forty-six last">
      <h3>UAV AERIAL PHOTOGRAPHY</h3>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum<br>
      <br>
      <a href="#">LEARN MORE</a>
    </div>
  </div>

  <hr>

  <div class="site-width">
    <div class="forty-six">
      <h3>COMPANY PROFILE</h3>
      Chaput Land Surveys provides professional land surveying services throughout Wisconsin. With our sole focus on surveying, we are able to provide exceptional service with a timely completion. Chaput has a survey staff of 9-10 surveyors including 4 licensed land surveyors. On a daily basis we dispatch 4 survey crews operating as one and two person field crews equipped with the latest technology which includes robotic total stations and survey grade GPS (GNSS) receivers.<br>
      <br>
      <a href="#">OUR COMPANY</a>
    </div>

    <div class="fifty-four last">
      <img src="images/company-profile.jpg" alt="">
    </div>
  </div>

  <div class="news-home">
    <div class="site-width">
      BLOG FEATURED (TWO COL FULL WIDTH)
    </div>
  </div>

  <div class="footer-contact">
    <div class="site-width">
      <div class="col1">
        <h1>CONTACT US</h1>
        We are available to answer any surveying questions you may have. Please call us or fill out the given form at your convenience.

        <h2>414-224-8068</h2>

        <div class="address">
          <strong>Office Location</strong><br>
          234 W. Florida Street<br>
          Milwaukee, WI 53204
        </div>

        <a href="#">REQUEST A SURVEY</a>
      </div>

      <div class="col2">
        <script type="text/javascript" src="inc/jquery.mask.min.js"></script>
        <script type="text/javascript">
          $(document).ready(function() {
            $.jMaskGlobals.watchDataMask = true;

            $("#name").blur(function() { $('#name').removeClass("notfilled").attr("placeholder", "* First & Last Name"); });
            $("#email").blur(function() { $('#email').removeClass("notfilled").attr("placeholder", "* Email Address"); });
            $("#subject").blur(function() { $('#subject').removeClass("notfilled").attr("placeholder", "* Subject"); });
            $("#message").blur(function() { $('#message').removeClass("notfilled").attr("placeholder", "* Message"); });

            var form = $('#contact-form');
            var formMessages = $('#contact-form-messages');
            $(form).submit(function(event) {
              event.preventDefault();

              function formValidation() {
                if ($('#name').val() === '') { $('#name').addClass("notfilled").attr("placeholder", "NAME REQUIRED").focus(); return false; }
                if ($('#email').val() === '') { $('#email').addClass("notfilled").attr("placeholder", "EMAIL REQUIRED").focus(); return false; }
                if ($('#subject').val() === '') { $('#subject').addClass("notfilled").attr("placeholder", "SUBJECT REQUIRED").focus(); return false; }
                if ($('#message').val() === '') { $('#message').addClass("notfilled").attr("placeholder", "MESSAGE REQUIRED").focus(); return false; }
                return true;
              }

              if (formValidation()) {
                var formData = $(form).serialize();
                formData += '&src=ajax';

                $.ajax({
                  type: 'POST',
                  url: $(form).attr('action'),
                  data: formData
                })
                .done(function(response) {
                  $(formMessages).html(response);

                  $(form).find('input:text, textarea').val('');
                  $('#email').val(''); // Grrr!
                })
                .fail(function(data) {
                  if (data.responseText !== '') {
                    $(formMessages).html(data.responseText);
                  } else {
                    $(formMessages).text('Oops! An error occured and your message could not be sent.');
                  }
                });
              }
            });
          });
        </script>

        <?php
        // Settings for randomizing form field names
        $ip = $_SERVER['REMOTE_ADDR'];
        $timestamp = time();
        $salt = "ForesiteGroupChaputLandSurveys";
        ?>
        <noscript>
        <?php
        $feedback = (!empty($_SESSION['feedback'])) ? $_SESSION['feedback'] : "";
        unset($_SESSION['feedback']);
        ?>
        </noscript>

        <div class="required">* Required</div>
        <form action="form-contact.php" method="POST" id="contact-form">
          <div>
            <input type="text" name="<?php echo md5("name" . $ip . $salt . $timestamp); ?>" id="name" placeholder="* First &amp; Last Name">

            <div class="one-half">
              <input type="text" name="<?php echo md5("phone" . $ip . $salt . $timestamp); ?>" id="phone" placeholder="Phone Number" data-mask="000-000-0000">
            </div>

            <div class="one-half last">
              <input type="email" name="<?php echo md5("email" . $ip . $salt . $timestamp); ?>" id="email" placeholder="* Email Address">
            </div>

            <div style="clear: both;"></div>

            <input type="text" name="<?php echo md5("subject" . $ip . $salt . $timestamp); ?>" id="subject" placeholder="* Subject">

            <textarea name="<?php echo md5("message" . $ip . $salt . $timestamp); ?>" id="message" placeholder="* Message"></textarea>

            <input type="hidden" name="referrer" value="<?php echo pathinfo(__FILE__, PATHINFO_BASENAME); ?>">

            <input type="text" name="confirmationCAP" style="display: none;"> <?php // Non-displaying field as a sort of invisible CAPTCHA. ?>

            <input type="hidden" name="ip" value="<?php echo $ip; ?>">
            <input type="hidden" name="timestamp" value="<?php echo $timestamp; ?>">

            <input type="submit" name="submit" value="SEND MESSAGE">

            <div id="contact-form-messages"><?php echo $feedback; ?></div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <div class="footer-menu">
    <?php include "menu.php"; ?>
  </div>

  <div class="cls-footer">
    <img src="images/footer-logo.png" alt="Chaput Land Surveys"><br>

    <span>&copy; <?php echo date("Y"); ?> Chaput Land Surveys, LLC.</span> 234 W. Florida Street, Milwaukee, WI 53204
  </div>

  </body>
</html>