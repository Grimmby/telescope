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
 * Add class to prevent transition on load
 */
add_filter(
    'body_class',
	function ($classes) {
        return array_merge($classes, array( 'preload' ));
    }
);

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
	function ( $atts, $item, $args, $depth ) {
		if ( 'header_navigation' === $args->theme_location ) {
			$atts['class'] = 'text-base text-black hover:text-primary';
		}
		if ( 'footer_navigation' === $args->theme_location ) {
			if ( 0 === $depth ) {
				$atts['class'] = 'block mb-6 font-secondary text-[1.125rem] font-semibold text-black';
			}
			else {
				$atts['class'] = 'font-primary text-base font-normal text-black hover:text-primary';
			}
		}
		return $atts;
	},
	10,
	4
);

/**
 * Add style to sub-menu <ul> elements.
 *
 * @source https://developer.wordpress.org/reference/hooks/nav_menu_submenu_css_class/
 *
 * @param array    $classes Array of the CSS classes that are applied to the menu <ul> element.
 * @param stdClass $args An object of wp_nav_menu() arguments.
 * @param int      $depth Depth of menu item. Used for padding.
 * @return $classes
 */
add_filter(
	'nav_menu_submenu_css_class',
	function( $classes, $args, $depth ) {
		if ( 'footer_navigation' === $args->theme_location ) {
			$classes[] = 'flex flex-col gap-y-3';
		}
		return $classes;
	},
	10,
	3
);


/**
 * Change <a> tags to <p> for menu items without url.
 *
 * @source https://developer.wordpress.org/reference/hooks/walker_nav_menu_start_el/
 *
 * @param $item_output The menu item’s starting HTML output.
 * @param $item Menu item data object.
 * @param $depth Depth of menu item. Used for padding.
 * @param $args An object of wp_nav_menu() arguments.
 * @return $item_output
 */
add_filter(
	'walker_nav_menu_start_el',
	function( $item_output, $item, $depth, $args ) {
		// Check if the menu item has no URL or if the URL is "#" or "/"
		if (empty($item->url) || $item->url == '#' || $item->url == '/') {
			// Replace <a> tag with <p>.
			$item_output = preg_replace( '/<a([^>]*)>/', '<p$1>', $item_output );
			$item_output = str_replace( '</a>', '</p>', $item_output );
			// Remove href attribute.
			$item_output = preg_replace( '/href="([^"]*)"/', '', $item_output );
		}
		return $item_output;
	},
	10,
	4
);
