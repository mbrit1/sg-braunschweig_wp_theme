<?php
// Add scripts and stylesheets
function sg2017_scripts() {
	wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css' );
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.min.js' );
  wp_enqueue_script( 'uikit', get_template_directory_uri() . '/assets/js/uikit.min.js' );
  wp_enqueue_script( 'slideshow', get_template_directory_uri() . '/assets/js/slideshow.min.js' );
  wp_enqueue_script( 'parallax', get_template_directory_uri() . '/assets/js/parallax.min.js' );
}

add_action( 'wp_enqueue_scripts', 'sg2017_scripts' );

// WordPress Titles
add_theme_support( 'title-tag' );
// Support Featured Images
add_theme_support( 'post-thumbnails' );
?>
