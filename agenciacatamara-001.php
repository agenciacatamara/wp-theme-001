<?php
/**
 * Plugin Name:       Agencia Catamara&#39;s 001 WP Theme
 * Description:       Demo Description
 * Version:           0.1.0
 * Requires at least: 6.7
 * Requires PHP:      7.4
 * Author:            The WordPress Contributors
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       agenciacatamara-001
 *
 * @package Agenciacatamara
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function agenciacatamara_agenciacatamara_001_block_init() {
	register_block_type( __DIR__ . '/build/agenciacatamara-001' );
}
add_action( 'init', 'agenciacatamara_agenciacatamara_001_block_init' );
