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
         * https://make.wordpress.org/core/2014/10/29/title-tags-in-4-1/
         */
        add_theme_support( 'title-tag' );
        
        // Register Navigation Menus
        register_nav_menus(array(
            'aftv-header-menu' => __('Menu principal', 'afriqtv'),
            'aftv-drawer-menu' => __('Menu latteral', 'afriqtv'),
            'aftv-legacy-menu' => __('Menu de Copyright', 'afriqtv')
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
 * 4 - LOAD AFTV SCRIPTS
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
 * 5 - Register SIDEBARS
 * 
 * ------------------------------------------------------
 */

function aftv_widgets_config() {
    register_sidebar(array(
        'name' => __('Sidebar de Pub'),
        'id' => 'sidebar-1',
        'description' => __('Sidebar pour afficher des pub normalement sur le front-page'),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => ''
    ));

    register_sidebar(array(
        'name' => __('Footer Sidebar 1'),
        'id' => 'sidebar-2',
        'description' => __('Sidebar numero 1 pour le pied de page'),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h1 class="mdl-mega-footer__heading">',
        'after_title' => '</h1>'
    ));

    register_sidebar(array(
        'name' => __('Footer Sidebar 2'),
        'id' => 'sidebar-3',
        'description' => __('Sidebar numero 2 pour le pied de page'),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h1 class="mdl-mega-footer__heading">',
        'after_title' => '</h1>'
    ));

    register_sidebar(array(
        'name' => __('Footer Sidebar 3'),
        'id' => 'sidebar-4',
        'description' => __('Sidebar numero 3 pour le pied de page'),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h1 class="mdl-mega-footer__heading">',
        'after_title' => '</h1>'
    ));


    register_sidebar(array(
        'name' => __('Footer Sidebar 4'),
        'id' => 'sidebar-5',
        'description' => __('Sidebar numero 4 pour le pied de page'),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h1 class="mdl-mega-footer__heading">',
        'after_title' => '</h1>'
    ));
    
    register_sidebar(array(
        'name' => __('Pages Sidebar'),
        'id' => 'sidebar-6',
        'description' => __('Sidebar  pour les differentes pages'),
        'before_widget' => '<div id="%1$s" class="aftv-widget__container %2$s" >',
        'after_widget' => '</div>',
        'before_title' => '<h1 class="aftv-cat-page__sidebar-title mdl-card__title-text">',
        'after_title' => '</h1>'
    ));
    
    register_sidebar( array(
         'name' => __('Date based archive Sidebar'),
        'id' => 'sidebar-7',
        'description' => __('Sidebar  pour les archives basées sur les dates'),
        'before_widget' => '<div id="%1$s" class="aftv-widget__container %2$s" >',
        'after_widget' => '</div>',
        'before_title' => '<h1 class="aftv-cat-page__sidebar-title mdl-card__title-text">',
        'after_title' => '</h1>'
    ));
}

add_action('widgets_init', 'aftv_widgets_config');




/* ------------------------------------------------------
 * 
 * 6 - UTILTIES
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


// Display posts Captions
if (!function_exists('aftv_post_thumbnail_caption')) {

    function aftv_post_thumbnail_caption() {
        echo get_post(get_post_thumbnail_id())->post_excerpt;
    }
}


// Enable Shortcodes In Wordpress Text Widgets
add_filter('widget_text','do_shortcode');

// Include AFTV navigation menus walker
require get_template_directory() . '/inc/aftv-menu-walker.php';

// Include Our custom Menu WIDGET
require get_template_directory().'/inc/aftv-custom-menu-widget.php';

// Register The widget
add_action( 'widgets_init', function() { register_widget( 'AFTV_Nav_Menu_Widget' ); } );