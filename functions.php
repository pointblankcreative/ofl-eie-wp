<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package enough
 * @since 1.0.0
 */

/**
 * The theme version.
 *
 * @since 1.0.0
 */
define( 'ENOUGH_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Add theme support.
 */
function enough_setup() {
	add_editor_style( './assets/css/style-shared.min.css' );
	add_editor_style( 'editor.css' );

	/*
	 * Load additional block styles.
	 * See details on how to add more styles in the readme.txt.
	 */
	$styled_blocks = [ 'button', 'quote' ];
	foreach ( $styled_blocks as $block_name ) {
		$args = array(
			'handle' => "enough-$block_name",
			'src'    => get_theme_file_uri( "assets/css/blocks/$block_name.min.css" ),
			'path'   => get_theme_file_path( "assets/css/blocks/$block_name.min.css" ),
		);
		// Replace the "core" prefix if you are styling blocks from plugins.
		wp_enqueue_block_style( "core/$block_name", $args );
	}
}
add_action( 'after_setup_theme', 'enough_setup' );

/**
 * Enqueue the CSS files.
 *
 * @since 1.0.0
 *
 * @return void
 */
function enough_styles() {
	wp_enqueue_style(
		'enough-style',
		get_stylesheet_uri(),
		[],
		ENOUGH_VERSION
	);
	wp_enqueue_style(
		'enough-shared-styles',
		get_theme_file_uri( 'assets/css/style-shared.min.css' ),
		[],
		ENOUGH_VERSION
	);
	wp_enqueue_style(
		'enough-adobe-fonts',
		esc_url('https://use.typekit.net/zso4coz.css'),
		[],
		ENOUGH_VERSION
	);
}
add_action( 'wp_enqueue_scripts', 'enough_styles' );

// Block style examples.
require_once get_theme_file_path( 'inc/register-block-styles.php' );
