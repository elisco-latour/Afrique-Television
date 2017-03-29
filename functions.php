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


/*------------------------------------------------------
 * 
 * 1 - CONSTANTS 
 * 
 * ------------------------------------------------------
 */ 

// A constant for the path of the theme root
define( 'THEME_ROOT', get_stylesheet_directory_uri() );

// A constant for the path of the theme default images folder
define( 'IMAGES', THEME_ROOT.'/images' );

// A constant for the path of thee theme default css folder 
define( 'CSS', THEME_ROOT.'/css' );

// A constant for the path of the theme default Javascript folder
define( 'JS', THEME_ROOT.'/js' );


/*------------------------------------------------------
 * 
 * 2 - THEME SETUP
 * 
 * ------------------------------------------------------
 */

if( !function_exists('aftv_theme_setup') ){
    function aftv_theme_setup(){
        // Make the theme available for translation
        $lang_dir = THEME_ROOT.'/languages';
        load_textdomain('afriqtv', $lang_dir);
        
        
        // Enable support for Post Formats
        $aftv_supported_format = array (
            'image',
            'video',
            'gallery',
            'audio',
        );
        add_theme_support( 'post-format', $aftv_supported_format );
    }
}