<?php
function understrap_remove_scripts() {
    wp_dequeue_style( 'understrap-styles' );
    wp_deregister_style( 'understrap-styles' );

    wp_dequeue_script( 'understrap-scripts' );
    wp_deregister_script( 'understrap-scripts' );

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {

	// Get the theme data
	$the_theme = wp_get_theme();

    wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . '/css/child-theme.min.css', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), $the_theme->get( 'Version' ), true );
}

// Add the styles and scripts for Owl Carousel
function theme_scripts_and_styles() {
	if( is_page ( 'homepage') ) {
    wp_enqueue_style( 'Owl Carousel CSS', get_stylesheet_directory_uri() . '/owl-carousel/owl.carousel.min.css' );
    wp_enqueue_style( 'Owl Carousel Theme', get_stylesheet_directory_uri() . '/owl-carousel/owl.theme.default.min.css' );
    wp_enqueue_script( 'Owl Carousel ', get_template_directory_uri() . '/owl-carousel/owl.carousel.min.js', array('jquery'), '1.0.0', true );
	}
}
add_action( 'wp_enqueue_scripts', 'theme_scripts_and_styles' );

// Add the ACF optiosn page

if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page( 'Company Info' );
    
}
