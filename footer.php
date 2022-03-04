  <?php if ($FooterForm != "no") { ?>
  <?php include_once "inc/fintoozler.php"; ?>
  <div class="footer-contact">
    <div class="site-width">
      <div class="col1">
        <h1>CONTACT US</h1>
        We are available to answer any surveying questions you may have. To request a survey, please call us or fill out the given form at your convenience.

        <h2>414-224-8068</h2>

        <div class="address">
          <strong>Office Location</strong><br>
          234 W. Florida Street<br>
          Milwaukee, WI 53204
        </div>
      </div>

      <div class="col2">
        <script type="text/javascript" src="<?php echo $TopDir; ?>inc/jquery.mask.min.js"></script>
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

        <noscript>
        <?php
        $feedback = (!empty($_SESSION['feedback'])) ? $_SESSION['feedback'] : "";
        unset($_SESSION['feedback']);
        ?>
        </noscript>

        <div class="required">* Required</div>
        <form action="<?php echo $TopDir; ?>form-contact.php" method="POST" id="contact-form">
          <div>
            <input type="text" name="name" id="name" placeholder="* First &amp; Last Name">

            <div class="one-half">
              <input type="text" name="phone" id="phone" placeholder="Phone Number" data-mask="000-000-0000">
            </div>

            <div class="one-half last">
              <input type="email" name="email" id="email" placeholder="* Email Address">
            </div>

            <div style="clear: both;"></div>

            <input type="text" name="subject" id="subject" placeholder="* Subject">

            <textarea name="message" id="message" placeholder="* Message"></textarea>

            <input type="hidden" name="referrer" value="<?php echo $_SERVER['REQUEST_URI']; ?>">
            
            <div class="g-recaptcha" data-sitekey="<?php echo RECAPTCHA_SITE_KEY; ?>"></div>

            <input type="submit" name="submit" value="SEND MESSAGE">

            <div id="contact-form-messages"><?php echo $feedback; ?></div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <?php } ?>

  <div class="footer-menu">
    <?php include "menu.php"; ?>
  </div>

  <div class="cls-footer">
    <div class="social">
      <a href="https://www.instagram.com/chaput_land_Surveys"><i class="fa fa-instagram" aria-hidden="true"></i></a>
      <a href="https://www.linkedin.com/company/10826666"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
    </div>

    <span>&copy; <?php echo date("Y"); ?> Chaput Land Surveys, LLC.</span> 234 W. Florida Street, Milwaukee, WI 53204<br>
    <a href="https://foresitegrp.com" style="font-size: 0.6875rem; color: #470707;">WEBSITE BY FORESITE</a>
  </div>

  </body>
</html>