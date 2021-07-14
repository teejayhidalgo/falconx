<?php
/**
 * Theme Functions
 * 
 * @package falconx
 */
if(! defined('FALCONX_DIR_PATH')){
    define('FALCONX_DIR_PATH', untrailingslashit( get_template_directory()));
}

require_once FALCONX_DIR_PATH.'/inc/helpers/autoloader.php';

function falconx_get_theme_instance(){
    \FALCONX_THEME\INC\FALCONX_THEME::get_instance();
}

falconx_get_theme_instance();


function load_stylesheets(){
    
    wp_register_style('stylesheet', get_template_directory_uri().'/assets/src/library/css/style.css', [], filemtime( get_template_directory().'/assets/src/library/css/style.css' ), 'all');
   // wp_register_style('bootstrap-css', get_template_directory_uri().'/assets/src/library/css/bootstrap.min.css', [], false, 'all');
    wp_enqueue_style('stylesheet');
   // wp_enqueue_style('bootstrap-css');

    //wp_register_script('bootstrap-js', get_template_directory_uri().'/assets/src/library/js/bootstrap.min.js', [ 'jquery' ], false, true);
   // wp_enqueue_script('bootstrap-js');
    wp_register_script('script-js', get_template_directory_uri().'/assets/src/library/js/script.js', [], false, true);
    wp_enqueue_script('script-js');
}

add_action('wp_enqueue_scripts', 'load_stylesheets');