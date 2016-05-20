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

$TopDir = substr( home_url(), 0, strrpos( home_url(), '/')+1);

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