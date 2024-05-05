<?php

/**
 * Theme filters.
 */

namespace App;

/**
 * Add "… Continued" to the excerpt.
 *
 * @return string
 */
add_filter('excerpt_more', function () {
    return sprintf(' &hellip; <a href="%s">%s</a>', get_permalink(), __('Continued', 'sage'));
});

/**
 * Add style to menu's <a> elements.
 *
 * @source https://developer.wordpress.org/reference/hooks/nav_menu_link_attributes/
 *
 * @param array    $atts The HTML attributes applied to the menu item's <a> element, empty strings are ignored.
 * @param WP_Post  $item The current menu item object.
 * @param stdClass $args An object of wp_nav_menu() arguments.
 */
add_filter(
	'nav_menu_link_attributes',
	function ( $atts, $item, $args ) {
		if ( 'header_navigation' === $args->theme_location ) {
			$atts['class'] = 'text-base text-black hover:text-primary';
		}
		return $atts;
	},
	10,
	3
);
