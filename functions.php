<?php

// Theme support
add_theme_support('post-thumbnails');

// Chargement des assets
add_action('wp_enqueue_scripts','load_themes_assets');

// Ajouter menu
add_action('init', 'add_menu');

// Add concerts
require_once('php/custom-concert.php');

// Add artists
require_once('php/custom-artist.php');

// Add genres taxonomy
require_once('php/custom-tax-genre.php');

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );


require_once('php/shortcodes.php');

/*
* Adds menu elements
*/
function add_menu() {
    register_nav_menu('main_menu', __('Mon menu principal'));
	register_nav_menu('footer_menu', __('Mon menu footer'));
	register_nav_menu('mobile', __('Mon menu mobile'));
}

/*
* Loads theme assets
* CSS and JS
*/
function load_themes_assets() {
    /* CSS */
    wp_enqueue_style('bootstrap-css', 
                        get_template_directory_uri().'/css/bootstrap.min.css');
    wp_enqueue_style('monStyle', 
                        get_template_directory_uri().'/css/monStyle.css');
    
    /* JavaScript */
    wp_enqueue_script('app', get_template_directory_uri().'/js/app.js',
                        null, null, true);
}

?>