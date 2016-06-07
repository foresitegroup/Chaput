<?php
$PageTitle = "Contact";
$Description = "We are available to answer any surveying questions you may have. Please fill out our form to request a survey or contact us directly.";
$Keywords = "contact us, contact chaput, request a survey, chaput, chaput land surveys, land surveys, land survey, land survey company, where to get a land survey, real estate due diligence, construction layout, construction site surveys, FAA approved UAS aerial photography, ALTA land title surveys, NSPS land title surveys, flood hazard surveys, concept development, topographic surveys";

$FooterForm = "no";

include "header.php";
?>

<div class="redband">
  <div class="site-width centered">
    <h1>CONTACT US</h1>

    We are available to answer any surveying questions you may have. Please fill out the form below to request a survey or <strong>contact us</strong> directly.
  </div>
</div>

<div class="site-width content survey-top">
  <h2>414-224-8068</h2>
  234 W. Florida Street <span>&bull;</span> Milwaukee, WI 53204
</div>

<hr class="survey-hr">

<div class="site-width content survey-emails">
  <div class="one-fourth">
    <strong>Donald C. Chaput</strong><br>
    <?php email("don@chaputlandsurveys.com"); ?>
  </div>

  <div class="one-fourth">
    <strong>Allen J. Schneider</strong><br>
    <?php email("al@chaputlandsurveys.com"); ?>
  </div>

  <div class="one-fourth">
    <strong>Daniel E. Bednar</strong><br>
    <?php email("dan@chaputlandsurveys.com"); ?>
  </div>

  <div class="one-fourth last">
    <strong>Gregory R. Boyle</strong><br>
    <?php email("greg@chaputlandsurveys.com"); ?>
  </div>
</div>

<div class="survey-wrap">
  <div class="site-width content survey">
    <script type="text/javascript">
      $(document).ready(function() {
        $("#companyname").blur(function() { $('#companyname').removeClass("notfilled").attr("placeholder", "* Company Name"); });
        $("#email").blur(function() { $('#email').removeClass("notfilled").attr("placeholder", "* Email Address"); });

        var form = $('#survey-form');
        var formMessages = $('#survey-form-messages');
        $(form).submit(function(event) {
          event.preventDefault();

          function formValidation() {
            if ($('#companyname').val() === '') { $('#companyname').addClass("notfilled").attr("placeholder", "COMPANY NAME REQUIRED").focus(); return false; }
            if ($('#email').val() === '') { $('#email').addClass("notfilled").attr("placeholder", "EMAIL REQUIRED").focus(); return false; }
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
    $salt = "ForesiteGroupChaputLandSurveys-surveyform";
    ?>
    <noscript>
    <?php
    $feedback = (!empty($_SESSION['feedback'])) ? $_SESSION['feedback'] : "";
    unset($_SESSION['feedback']);
    ?>
    </noscript>

    <div class="required">* Required</div>
    <form action="form-survey.php" method="POST" id="survey-form">
      <div>
        <div class="one-half">
          <input type="text" name="<?php echo md5("companyname" . $ip . $salt . $timestamp); ?>" id="companyname" placeholder="* Company Name">
        </div>

        <div class="one-half last">
          <input type="text" name="<?php echo md5("orderedby" . $ip . $salt . $timestamp); ?>" id="orderedby" placeholder="Ordered By">
        </div>

        <div style="clear: both;"></div>

        <div class="one-half">
          <input type="text" name="<?php echo md5("companyaddress" . $ip . $salt . $timestamp); ?>" id="companyaddress" placeholder="Company Address">
        </div>

        <div class="one-half last">
          <input type="text" name="<?php echo md5("citystatezip" . $ip . $salt . $timestamp); ?>" id="citystatezip" placeholder="City, State, Zip">
        </div>

        <div style="clear: both;"></div>

        <div class="one-half">
          <input type="email" name="<?php echo md5("email" . $ip . $salt . $timestamp); ?>" id="email" placeholder="* Email Address">
        </div>

        <div class="one-half last">
          <input type="text" name="<?php echo md5("propertyaddress" . $ip . $salt . $timestamp); ?>" id="propertyaddress" placeholder="Property Address, City">
        </div>

        <div style="clear: both;"></div>

        <textarea name="<?php echo md5("questionscomments" . $ip . $salt . $timestamp); ?>" id="questionscomments" placeholder="Questions/Comments"></textarea>

        <input type="hidden" name="referrer" value="contact.php">

        <input type="text" name="confirmationCAP" style="display: none;"> <?php // Non-displaying field as a sort of invisible CAPTCHA. ?>

        <input type="hidden" name="ip" value="<?php echo $ip; ?>">
        <input type="hidden" name="timestamp" value="<?php echo $timestamp; ?>">

        <div class="centered">
          <input type="submit" name="submit" value="SEND MESSAGE">
        </div>

        <div id="survey-form-messages"><?php echo $feedback; ?></div>
      </div>
    </form>
  </div>
</div>

<?php include "footer.php"; ?>