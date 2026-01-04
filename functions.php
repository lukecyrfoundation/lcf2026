<?php
// Add theme support
function lcf_theme_setup() {
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	add_theme_support('menus');
}
add_action('after_setup_theme', 'lcf_theme_setup');

// Enqueue scripts and styles
function lcf_enqueue_assets() {
	wp_enqueue_style('custom-style', get_template_directory_uri() . '/lib/css/custom_bs.css' );
	wp_enqueue_style('main-style', get_template_directory_uri() . '/lib/css/main.css' );
	wp_enqueue_style('bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css');
	wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Lato:weight@400;700&family=Montserrat:weight@400;700&display=swap');
	wp_enqueue_script('jquery');
	wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/lib/js/bootstrap.min.js', array('jquery'), null, true)
;
}
add_action('wp_enqueue_scripts', 'lcf_enqueue_assets');

// Register menus
function lcf_register_menus() {
	register_nav_menus( array(
		'primary'   => __( 'Primary Menu', 'lcf-theme' ),
		'secondary' => __( 'Secondary Menu', 'lcf-theme' ),
	) );
}

add_action( 'init', 'lcf_register_menus' );

add_theme_support( 'responsive-embeds' );
