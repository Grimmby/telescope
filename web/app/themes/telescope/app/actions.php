<?php
/**
 * Theme actions.
 */

namespace App;

/**
 * Add ACF options menu
 */
add_action(
	'acf/init',
	function () {
		if ( function_exists( 'acf_add_options_page' ) ) {
			$options = acf_add_options_page(
				array(
					'page_title' => __( 'Options', 'theme-telescope' ),
					'menu_title' => __( 'Options', 'theme-telescope' ),
					'redirect'   => false,
					'capability' => 'edit_theme_options',
					'position'   => 61,
				)
			);
		}
	}
);
