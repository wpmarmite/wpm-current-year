<?php
/**
 * Plugin Name:       Current Year
 * Description:       A dynamic block that automatically displays the current year with customizable formatting.
 * Version:           0.1.0
 * Requires at least: 6.1
 * Requires PHP:      7.4
 * Author:            WPMarmite Start
 * Author URI:        https://start.wpmarmite.com
 * License:           GPLv2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       wpm-current-year
 *
 * @package CurrentYear
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Load plugin textdomain for translations.
 */
function current_year_load_textdomain() {
	load_plugin_textdomain(
		'wpm-current-year',
		false,
		dirname( plugin_basename( __FILE__ ) ) . '/languages'
	);
}
add_action( 'init', 'current_year_load_textdomain' );

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function current_year_block_init() {
	register_block_type( __DIR__ . '/build/' );
}
add_action( 'init', 'current_year_block_init' );

/**
 * Set script translations after assets are enqueued.
 */
function current_year_set_translations() {
	// Try to find and set translations for the block editor script
	$script_handle = generate_block_asset_handle( 'telex/current-year', 'editorScript' );

	if ( function_exists( 'wp_set_script_translations' ) ) {
		wp_set_script_translations(
			$script_handle,
			'wpm-current-year',
			plugin_dir_path( __FILE__ ) . 'languages'
		);
	}
}
add_action( 'enqueue_block_editor_assets', 'current_year_set_translations' );

/**
 * Registers the [current-year] shortcode.
 *
 * @param array $atts Shortcode attributes.
 * @return string The current year with optional prefix and suffix.
 */
if ( ! function_exists( 'current_year_shortcode' ) ) {
	function current_year_shortcode( $atts ) {
		$atts = shortcode_atts(
			array(
				'prefix' => '',
				'suffix' => '',
			),
			$atts,
			'current-year'
		);

		$current_year = date( 'Y' );
		
		return esc_html( $atts['prefix'] ) . esc_html( $current_year ) . esc_html( $atts['suffix'] );
	}
}
add_shortcode( 'current-year', 'current_year_shortcode' );