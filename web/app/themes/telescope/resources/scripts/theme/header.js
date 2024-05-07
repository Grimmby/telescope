export function headerScript() {
	( function( $ ) {
		let header_container = $('.js__header-container');
		let header_logo = $('.js__header-logo');
		let header_desktop_nav = $('.js__header-desktop-nav');
		let header_desktop_btn = $('.js__header-desktop-btn');
		let burger_btn = $('.js__burger-btn');
		let burger_nav = $('.js__burger_nav');

		let desktop_nav_items_width = header_desktop_nav.outerWidth() + header_desktop_btn.outerWidth();
		let nav_max_width = header_container.width() - header_logo.width();

		/**
		 * Show / hide desktop and burger menu on page load.
		 */
		if( ( desktop_nav_items_width + 100 ) > nav_max_width ) {
			mobile_header_nav();
		}
		if ( $(window).width() <= 768 ) {
			mobile_header_nav();
		}

		/**
		 * Show / hide desktop and burger menu according to window width.
		 */
		$(window).resize(function(){
			/* Desktop */
			nav_max_width = header_container.width() - header_logo.width();

			if( ( desktop_nav_items_width + 100 ) > nav_max_width ) {
				mobile_header_nav();
			} else if ( $(window).width() <= 768 ) {
				mobile_header_nav();
			} else {
				desktop_header_nav();
			}

			/* Burger menu */
			hide_burger_menu();
		});

		/**
		 * Burger Menu
		 */
		burger_btn.on('click', function() {
			if( $(this).hasClass('active') ) {
				hide_burger_menu();
			} else {
				show_burger_menu();
			}
		});

		// Functions.
		function desktop_header_nav() {
			header_desktop_nav.addClass('flex').removeClass('hidden');
			header_desktop_btn.show();
			burger_btn.addClass('hidden').removeClass('block');
		}
		function mobile_header_nav() {
			header_desktop_nav.addClass('hidden').removeClass('flex');
			header_desktop_btn.hide();
			burger_btn.addClass('block').removeClass('hidden');
		}
		function show_burger_menu() {
			burger_btn.addClass('active');
			burger_nav.addClass('active');
		}
		function hide_burger_menu() {
			burger_btn.removeClass('active');
			burger_nav.removeClass('active');
		}

	})( jQuery );
}
