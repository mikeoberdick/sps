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
    wp_enqueue_script( 'SPS Theme JS', get_stylesheet_directory_uri() . '/js/sps_theme.js', array('jquery'), '1.0.0', true );
}

// Add the styles and for Google Fonts
function google_fonts_styles() {
    wp_enqueue_style( 'cabin-font', 'https://fonts.googleapis.com/css?family=Cabin', false );
    wp_enqueue_style( 'open-sans-font', 'https://fonts.googleapis.com/css?family=Open+Sans', false );
    wp_enqueue_style( 'open-sans-condensed-font', 'https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300', false );
}
add_action( 'wp_enqueue_scripts', 'google_fonts_styles' );

// Add the Mix It Up (filterable portfolio) files
function sps_miu_js() {
    wp_enqueue_script( 'MIU Theme JS', get_stylesheet_directory_uri() . '/miu/miu.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'MIU JS', get_stylesheet_directory_uri() . '/miu/jquery.mixitup.min.js', array('jquery'), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'sps_miu_js' );

// Add the styles and scripts for Owl Carousel
function oc_scripts_and_styles() {
	if( is_page ( 'homepage') ) {
    wp_enqueue_style( 'Owl Carousel CSS', get_stylesheet_directory_uri() . '/owl-carousel/owl.carousel.min.css' );
    wp_enqueue_style( 'Owl Carousel Animation', get_stylesheet_directory_uri() . '/owl-carousel/animate.css' );
    wp_enqueue_style( 'Owl Carousel Theme', get_stylesheet_directory_uri() . '/owl-carousel/owl.theme.default.min.css' );
    wp_enqueue_script( 'Owl Carousel JS', get_stylesheet_directory_uri() . '/owl-carousel/owl.carousel.min.js', array('jquery'), '1.0.0', true );
	}
}
add_action( 'wp_enqueue_scripts', 'oc_scripts_and_styles' );

// Add the styles and scripts for Featherlight Lightbox
function fl_scripts_and_styles() {
    if( is_page ( 'gallery-of-work') ) {
wp_enqueue_style( 'FeatherLight CSS', get_stylesheet_directory_uri() . '/featherlight/featherlight.css' );
wp_enqueue_style( 'FeatherLight Gallery CSS', get_stylesheet_directory_uri() . '/featherlight/featherlight.gallery.css' );
wp_enqueue_script( 'FeatherLight JS', get_stylesheet_directory_uri() . '/featherlight/featherlight.js', array('jquery'), '1.0.0', true );
wp_enqueue_script( 'FeatherLight Gallery JS', get_stylesheet_directory_uri() . '/featherlight/featherlight.gallery.js', array('jquery'), '1.0.0', true );
    }
}

add_action ( 'wp_enqueue_scripts', 'fl_scripts_and_styles' );

// Add the styles and scripts for Animate on Scroll
function aos_scripts_and_styles() {
    if( is_page ( 'gallery-of-work') ) {
wp_enqueue_style( 'AOS CSS', get_stylesheet_directory_uri() . '/aos/aos.css' );
wp_enqueue_script( 'AOS JS', get_stylesheet_directory_uri() . '/aos/aos.js', array('jquery'), '1.0.0', true );
    }
}

add_action ( 'wp_enqueue_scripts', 'aos_scripts_and_styles' );

// Add the ACF options page

if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page( 'Edit Site Content' );
    
}

// Register the Contact Page Sidebar
add_action( 'widgets_init', 'sps_sidebars' );

function sps_sidebars() {

    register_sidebar( array(
        'name' => 'Contact Sidebar',
        'id' => 'contact-sidebar',
        'description' => 'Widgets in this area will be shown on all all contact pages.',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name' => 'Blog Sidebar',
        'id' => 'blog-sidebar',
        'description' => 'Widgets in this area will be shown on blog pages.',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

}


// Register the custom taxonomy for attachments
function sps_add_img_tag_taxonomy() {
    $labels = array(
        'name'              => 'Image Tag',
        'singular_name'     => 'Image Tag',
        'search_items'      => 'Search Image Tags',
        'all_items'         => 'All Image Tags',
        'parent_item'       => 'Parent Image Tag',
        'parent_item_colon' => 'Parent Image Tag:',
        'edit_item'         => 'Edit Image Tag',
        'update_item'       => 'Update Image Tag',
        'add_new_item'      => 'Add New Image Tag',
        'new_item_name'     => 'New Image Tag Name',
        'menu_name'         => 'Image Tag',
    );
 
    $args = array(
        'labels' => $labels,
        'hierarchical' => false,
        'query_var' => 'true',
        'rewrite' => 'true',
        'show_admin_column' => 'true',
    );
 
    register_taxonomy( 'image_tag', 'attachment', $args );
}
add_action( 'init', 'sps_add_img_tag_taxonomy' );