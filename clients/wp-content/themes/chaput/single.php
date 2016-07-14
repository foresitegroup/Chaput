<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header();

// Start the loop.
while ( have_posts() ) : the_post();

	// Include the single post content template.
	get_template_part( 'content', get_post_format() );

	// End of the loop.
endwhile;

get_footer();
?>