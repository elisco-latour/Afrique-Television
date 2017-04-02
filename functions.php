<?php

/*
 * =====================================================
 *
 * functions.php 
 * 
 * The Theme's Functions
 * 
 * =====================================================
 */


/* ------------------------------------------------------
 * 
 * 1 - CONSTANTS 
 * 
 * ------------------------------------------------------
 */

// A constant for the path of the theme root
define('THEME_ROOT', get_stylesheet_directory_uri());

// A constant for the path of the theme default images folder
define('IMAGES', THEME_ROOT . '/images');

// A constant for the path of thee theme default css folder 
define('CSS', THEME_ROOT . '/css');

// A constant for the path of the theme default Javascript folder
define('JS', THEME_ROOT . '/assets/js');





/* ------------------------------------------------------
 * 
 * 2 - THEME SETUP
 * 
 * ------------------------------------------------------
 */

if (!function_exists('aftv_theme_setup')) {

    function aftv_theme_setup() {
        // Make the theme available for translation
        $lang_dir = THEME_ROOT . '/languages';
        load_textdomain('afriqtv', $lang_dir);


        // Enable support for Post Formats
        $aftv_supported_format = array(
            'image',
            'video',
            'gallery',
            'audio',
        );
        add_theme_support('post-formats', $aftv_supported_format);

        // Add theme support for post thubnails
        add_theme_support('post-thumbnails');

        //Add Custom Background support
        $defaults = array(
            'default-image' => '',
            'default-preset' => 'default',
            'default-position-x' => 'left',
            'default-position-y' => 'top',
            'default-size' => 'auto',
            'default-repeat' => 'repeat',
            'default-attachment' => 'scroll',
            'default-color' => '',
            'wp-head-callback' => '_custom_background_cb',
            'admin-head-callback' => '',
            'admin-preview-callback' => '',
        );
        add_theme_support('custom-background', $defaults);
        
        /*
         * Let Wordpress Generate of the website
         * 
         */
        add_theme_support( 'title-tag' );
        
        // Register Navigation Menus
        register_nav_menus(array(
            'aftv-header-menu' => __('Menu principal', 'afriqtv'),
            'aftv-drawer-menu' => __('Menu latteral', 'afriqtv')
        ));
    }

    //Load Aftv theme setup after Wordpress theme setup
    add_action('after_setup_theme', 'aftv_theme_setup');
}

if (!function_exists('aftv_custom_logo_setup')) {

    // Add custom logo support
    function aftv_custom_logo_setup() {
        $parameters = array(
            'height' => 41,
            'width' => 197,
            'flex-height' => true,
            'flex-width' => true,
            'header-text' => array('site-title'),
        );
        add_theme_support('custom-logo', $parameters);
    }

    add_action('after_setup_theme', 'aftv_custom_logo_setup');
}



/* ------------------------------------------------------
 * 
 * 3 - LOAD AFTV SCRIPTS
 * 
 * ------------------------------------------------------
 */

if (!function_exists('aftv_scripts')) {

    function aftv_scripts() {

        // Load Material Design Lite STYLESHEET
        wp_enqueue_style('MDL_STYLE', 'https://code.getmdl.io/1.3.0/material.red-orange.min.css');

        // Load Material Design Lite Fonts
        wp_enqueue_style('MDL_FONTS', 'http://fonts.googleapis.com/css?family=Roboto:300,400,500,700');

        //Load Material design Icons
        wp_enqueue_style('MDL_ICONS', 'https://fonts.googleapis.com/icon?family=Material+Icons');

        // Load the theme styleSheet 
        wp_enqueue_style('MAIN_STYLE', get_stylesheet_uri());

        //Load Material Design Lite Javascript
        wp_enqueue_script('MDL_JS', 'https://code.getmdl.io/1.3.0/material.min.js', array(), 1.0, TRUE);

        // Load The Tv player JS
        wp_enqueue_script('WEB-TV_JS', JS . '/aftv-web-tv.js', array(), 1.0, TRUE);
    }

}
add_action('wp_enqueue_scripts', 'aftv_scripts');



/* ------------------------------------------------------
 * 
 * 4 - UTILTIES
 * 
 * ------------------------------------------------------
 */

// Add a class to my Menu links.
if (!function_exists('aftv_add_menu_link_class')) {

    $navClass = "mdl-navigation";

    function aftv_add_menu_link_class($navClass) {
        return preg_replace('/<a/', '<a class="mdl-navigation__link"', $navClass);
    }

    add_filter('wp_nav_menu', 'aftv_add_menu_link_class');
}

if (!function_exists('aftv_post_thumbnail_caption')) {

    function aftv_post_thumbnail_caption() {
        echo get_post(get_post_thumbnail_id())->post_excerpt;
    }
}

require get_template_directory() . '/inc/aftv-menu-walker.php';
