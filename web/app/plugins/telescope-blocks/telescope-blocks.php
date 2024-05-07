<?php
/**
 * Plugin Name:       Telescope Blocks
 * Description:       Custom Gutenberg blocks for Telescope theme.
 * Requires at least: 6.1
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            The WordPress Contributors
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       telescope-blocks
 *
 * @package CreateBlock
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Add new block categories.
 *
 * @param array $block_categories Array of categories for block types.
 * @return array
 */
function telescope_block_categories( $block_categories ) {
    return array_merge(
        $block_categories,
        array(
            array(
                'slug'  => 'telescope-react-blocks',
                'title' => __( 'Blocs React Telescope', 'telescope-blocks' ),
            ),
		)
    );
}
add_action( 'block_categories_all', 'telescope_block_categories', 10, 2 );

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function create_block_telescope_blocks_block_init() {
	register_block_type( __DIR__ . '/build' );
}
add_action( 'init', 'create_block_telescope_blocks_block_init' );
