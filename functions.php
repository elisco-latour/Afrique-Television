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
define('JS', THEME_ROOT . '/js');





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
        add_theme_support('post-format', $aftv_supported_format);

        // Register Navigation Menus
        register_nav_menus(array(
            'aftv-header-menu' => __('Menu principal', 'afriqtv')
        ));
    }

    //Load Aftv theme setup after Wordpress theme setup
    add_action('after_setup_theme', 'aftv_theme_setup');
}



/* ------------------------------------------------------
 * 
 * 3 - UTILTIES
 * 
 * ------------------------------------------------------
 */

// Add a class to my Menu links.
if ( !function_exists( 'aftv_add_menu_link_class' ) ) {
    
    $navClass= "mdl-navigation";
    
    function aftv_add_menu_link_class($navClass) {
        return preg_replace('/<a/', '<a clas="mdl-navigation__link"', $navClass);
    }

    add_filter('wp_nav_menu', 'aftv_add_menu_link_class');
}
