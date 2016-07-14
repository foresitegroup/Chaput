<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content site-width<?php if ( !is_front_page() ) : echo " client-single"; endif; ?>">
		<?php
		wp_head();

		the_content();
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->

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