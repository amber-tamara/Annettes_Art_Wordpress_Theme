<?php 
/**
 * Theme Functions.
 * 
 * @package Annettes Art 
 */

if ( ! defined( 'ANNETTE_DIR_PATH' ) ) {
   define( 'ANNETTE_DIR_PATH', untrailingslashit( get_template_directory() ) );
}

if ( ! defined( 'ANNETTE_DIR_URI' ) ) {
   define( 'ANNETTE_DIR_URI', untrailingslashit( get_stylesheet_directory_uri() ) );
}

require_once ANNETTE_DIR_PATH . '/inc/helpers/autoloader.php';

function annette_get_theme_instance() {
	\ANNETTE_THEME\Inc\ANNETTE_THEME::get_instance();
}

annette_get_theme_instance();

function annette_enqueue_scripts() {

}

add_action('wp_enqueue_scripts', 'annette_enqueue_scripts');