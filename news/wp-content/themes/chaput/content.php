<?php
/**
 * The template part for displaying content
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<?php if ( !is_single() ) : ?>
<!-- <div class="site-width blog-index"> -->
<?php endif; ?>

  <?php if ( !is_single() ) : ?>
	<div class="entry-header site-width">
		<?php the_title( '<h3 class="entry-title">', '</h3>' ); ?>
		<h4><?php the_date(); ?></h4>
	</div><!-- .entry-header -->
	<?php endif; ?>

	<div class="entry-content site-width<?php if ( is_single() ) : echo " single"; endif; ?>">
		<?php
		  if ( is_single() ) :
				/* translators: %s: Name of current post */
				the_content( sprintf(
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentysixteen' ),
					get_the_title()
				) );

				the_tags( '<span class="tags-links"><strong>Tags:</strong> ', ', ', '</span>' );

				// Previous/next post navigation.
				the_post_navigation( array(
					'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'NEXT <i class="fa fa-long-arrow-right" aria-hidden="true"></i>', 'twentysixteen' ) . '</span> ',
					'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( '<i class="fa fa-long-arrow-left" aria-hidden="true"></i> PREVIOUS', 'twentysixteen' ) . '</span>',
				) );
			else :
				the_excerpt();
			  echo "<a href=\"" . get_permalink() . "\" class=\"readmore\">READ FULL STORY</a>";
			endif;

			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentysixteen' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );
		?>
	</div><!-- .entry-content -->

<?php if ( !is_single() ) : ?>
<!-- </div> END site-width -->
<?php endif; ?>