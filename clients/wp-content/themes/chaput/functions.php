<?php
function wpdocs_custom_excerpt_length( $length ) {
    return 69;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

function change_excerpt_more() {
  function new_excerpt_more( $more ) {
    return '...';
  }
  add_filter('excerpt_more', 'new_excerpt_more');
}
add_action('after_setup_theme', 'change_excerpt_more');

// Home page blog excerpt
function excerpt($limit) {
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  } 
  $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
  return $excerpt;
}

add_theme_support( 'post-thumbnails' );

function my_thumbnail_size() {
  set_post_thumbnail_size();
}
add_action('after_setup_theme', 'my_thumbnail_size', 11);

function my_scripts() {
  wp_enqueue_script( 'custom-script', get_template_directory_uri() . '/scripts.js', array( 'jquery' ) );
}
add_action( 'wp_enqueue_scripts', 'my_scripts' ); 

// I'll style the gallery myself, thank you....
add_filter( 'use_default_gallery_style', '__return_false' );

// I need wp_head but not all the cruft that comes with it
remove_action( 'wp_head', 'rest_output_link_wp_head', 10, 0 );
remove_action( 'wp_head', '_wp_render_title_tag',            1     );
remove_action( 'wp_head', 'feed_links',                      2     );
remove_action( 'wp_head', 'feed_links_extra',                3     );
remove_action( 'wp_head', 'rsd_link'                               );
remove_action( 'wp_head', 'wlwmanifest_link'                       );
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
remove_action( 'wp_head', 'locale_stylesheet'                      );
remove_action( 'wp_head', 'noindex',                          1    );
remove_action( 'wp_head', 'print_emoji_detection_script',     7    );
remove_action( 'wp_head', 'wp_generator'                           );
remove_action( 'wp_head', 'rel_canonical'                          );
remove_action( 'wp_head', 'wp_shortlink_wp_head',            10, 0 );
remove_action( 'wp_head', 'wp_site_icon',                    99    );
remove_action( 'wp_head', 'wp_oembed_add_discovery_links'         );
remove_action( 'wp_head', 'wp_oembed_add_host_js'                 );
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
add_filter('show_admin_bar', '__return_false');
wp_deregister_script('jquery');
wp_register_script('jquery', '', '', '', true);

// Adds gallery shortcode default of size="full"
function my_gallery_atts( $out, $pairs, $atts ) {
  $atts = shortcode_atts( array(
    'size' => 'full',
  ), $atts );

  $out['size'] = $atts['size'];

  return $out;
}
add_filter( 'shortcode_atts_gallery', 'my_gallery_atts', 10, 3 );

// Wrap video embed code in DIV for responsive goodness
add_filter( 'embed_oembed_html', 'my_oembed_filter', 10, 4 ) ;
function my_oembed_filter($html, $url, $attr, $post_ID) {
  $return = '<div class="video">'.$html.'</div>';
  return $return;
}

// Disable visual editor completely
add_filter( 'user_can_richedit' , '__return_false', 50 );
?>