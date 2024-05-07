<?php
/**
 * Plugin Name: Tools
 * Version: 1.1
 */

/**
 * Authorize SVG
 */
add_filter(
	'upload_mimes',
	function( $mimes ) {
		$mimes['svg'] = 'image/svg+xml';
		return $mimes;
	}
);

/**
 * Set ACF repeater field to block
 */
add_filter(
	'acf/prepare_field',
	function( $field ) {
		$field['layout'] = 'block';
		return $field;
	}
);

/**
 * Authorize custom clock and delete default blocks
 */
add_filter(
	'allowed_block_types',
	function( $allowed_block_types, $post ) {
		$acf_block_types = acf_get_block_types();
		$acf_block_type_names = array_keys( $acf_block_types );
		$allowed_block_types = is_array( $allowed_block_types ) ? $allowed_block_types : [];
		$allowed_block_types = array_merge( $allowed_block_types, $acf_block_type_names );
		$allowed_block_types = array_merge( $allowed_block_types, array( 'create-block/telescope-blocks' ) );

		return $allowed_block_types;
	},
	10,
	2
);

/**
 * Add new (custom) block category and display it at the top
 */
add_filter(
    'block_categories_all',
    function( $categories ) {
        array_unshift(
            $categories,
            array(
                'slug'  => 'Telescope',
                'title' => 'Blocs Telescope'
            )
        );

        return $categories;
    }
);
