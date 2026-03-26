<?php
/**
 * Starter Theme functions and definitions.
 *
 * @package Starter_Theme
 */

// Enqueues editor-style.css in the editors.
function starter_theme_editor_style() {
	add_editor_style( 'assets/css/editor-style.css' );
}
add_action( 'after_setup_theme', 'starter_theme_editor_style' );

// Enqueues the theme stylesheet on the front.
function starter_theme_enqueue_styles() {
	wp_enqueue_style(
		'starter-theme-style',
		get_theme_file_uri( 'style.css' ),
		array(),
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'starter_theme_enqueue_styles' );
