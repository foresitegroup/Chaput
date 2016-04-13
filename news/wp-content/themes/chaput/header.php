<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

$TopDir = ($_SERVER['DOCUMENT_ROOT'] != dirname(__FILE__)) ? "http://" . $_SERVER['HTTP_HOST'] . "/" : "";
if ($_SERVER['SERVER_NAME'] == "localhost") { $parts = explode("/", $_SERVER['REQUEST_URI']); $TopDir .= $parts[1] . "/"; }

if ( !is_single() ) :
  $HeaderClass = "blog-index";
  $PageTitle = "Industry News";
  $Description = "";
  $Keywords = "";
else :
  $HeaderClass = "blog-single";
  $HeaderBackground = wp_get_attachment_url(get_post_thumbnail_id());
  $PageTitle = get_the_title();
endif;

include "../header.php";
?>

<div class="subheader <?php echo $HeaderClass; ?>"<?php if ($HeaderBackground != "") echo 'style="background-image: url(' . $HeaderBackground . ');"'; ?>>
  <?php if ( is_single() && $HeaderBackground != "" ) : echo "<div class=\"overlay\">"; endif; ?>
	<div class="site-width">
		<?php echo $PageTitle; ?>
		<?php if ( is_single() ) : echo "<h5>" . get_the_date() . "</h5>"; endif; ?>
	</div>
  <?php if ( is_single() && $HeaderBackground != "" ) : echo "</div>"; endif; ?>
</div>