<?php
// Add scripts and stylesheets
function sg2017_scripts() {
	wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css' );
	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Graduate|Open+Sans:400,400i,700' );
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.min.js' );
  wp_enqueue_script( 'uikit', get_template_directory_uri() . '/assets/js/uikit.min.js' );
  wp_enqueue_script( 'slideshow', get_template_directory_uri() . '/assets/js/slideshow.min.js' );
  wp_enqueue_script( 'parallax', get_template_directory_uri() . '/assets/js/parallax.min.js' );
	wp_enqueue_script( 'grid', get_template_directory_uri() . '/assets/js/grid.min.js' );
}
add_action( 'wp_enqueue_scripts', 'sg2017_scripts' );

// WordPress Titles
add_theme_support( 'title-tag' );
// Support Featured Images
add_theme_support( 'post-thumbnails' );

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
			'footer-menu' => __( 'Footer Menu' ),
     )
   );
 }
 add_action( 'init', 'register_my_menus' );
 /**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 50;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );
?>
