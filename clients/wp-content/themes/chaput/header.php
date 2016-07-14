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

if ( is_front_page() ) :
  wp_redirect( 'http://www.chaputlandsurveys.com', 301 ); exit;
  // $PageTitle = "Clients";
  // $Description = "";
  // $Keywords = "";
  // $HeaderClass = "blog-index";
else :
  $PageTitle = get_the_title();
  $HeaderClass = "blog-single";
endif;

include "../header.php";
?>

<div class="subheader <?php echo $HeaderClass; ?> clients">
	<div class="site-width">
		<?php echo $PageTitle; ?>
	</div>
</div>
