<?php
/**
 * Theme functions
 *
 * @package Kenta Aurora
 */

// don't call the file directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! defined( 'KENTA_AURORA_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'KENTA_AURORA_VERSION', '1.0.1' );
}

if ( ! defined( 'KENTA_AURORA_PATH' ) ) {
	define( 'KENTA_AURORA_PATH', trailingslashit( get_stylesheet_directory() ) );
}

if ( ! defined( 'KENTA_AURORA_URL' ) ) {
	define( 'KENTA_AURORA_URL', trailingslashit( get_stylesheet_directory_uri() ) );
}

if ( ! defined( 'KENTA_AURORA_ASSETS_URL' ) ) {
	define( 'KENTA_AURORA_ASSETS_URL', KENTA_AURORA_URL . 'assets/' );
}

if ( ! function_exists( 'kenta_aurora_demo_slug' ) ) {
	function kenta_aurora_demo_slug() {
		return 'aurora';
	}
}
add_filter( 'kenta_welcome_demo_slug', 'kenta_aurora_demo_slug' );

if ( ! function_exists( 'kenta_aurora_demo_name' ) ) {
	function kenta_aurora_demo_name() {
		return __( 'Kenta Aurora', 'kenta-aurora' );
	}
}
add_filter( 'kenta_welcome_demo_name', 'kenta_aurora_demo_name' );

if ( ! function_exists( 'kenta_aurora_demo_screenshot' ) ) {
	function kenta_aurora_demo_screenshot() {
		return KENTA_AURORA_URL . 'screenshot.png';
	}
}
add_filter( 'kenta_welcome_demo_screenshot', 'kenta_aurora_demo_screenshot' );

// Customizer settings hook
require_once KENTA_AURORA_PATH . 'customizer.php';
