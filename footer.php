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

        <a href="<?php echo $TopDir; ?>request-survey.php">REQUEST A SURVEY</a>
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
        <form action="<?php echo $TopDir; ?>form-contact.php" method="POST" id="contact-form">
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

            <input type="hidden" name="referrer" value="<?php echo $_SERVER['REQUEST_URI']; ?>">

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
    <img src="<?php echo $TopDir; ?>images/footer-logo.png" alt="Chaput Land Surveys"><br>

    <span>&copy; <?php echo date("Y"); ?> Chaput Land Surveys, LLC.</span> 234 W. Florida Street, Milwaukee, WI 53204
  </div>

  </body>
</html>