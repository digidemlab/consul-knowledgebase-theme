<?php
/**
 * Flatbase Child by NiceThemes.
 *
 * Functions
 *
 * @package   Flatbase_Child
 * @author    NiceThemes <hello@nicethemes.com>
 * @license   GPL-2.0+
 * @copyright 2017 NiceThemes
 * @since     1.0
 */
// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

if ( ! function_exists( 'nice_child_theme_enqueue_styles' ) ) :
add_action( 'wp_enqueue_scripts', 'nice_child_theme_enqueue_styles' );
/**
 * nice_child_theme_enqueue_styles()
 *
 * Include the parent theme styles.
 *
 * @since 1.0
 *
 */
function nice_child_theme_enqueue_styles() {
	wp_enqueue_style( 'flatbase-stylesheet', get_template_directory_uri() . '/style.css' );
}
endif;

