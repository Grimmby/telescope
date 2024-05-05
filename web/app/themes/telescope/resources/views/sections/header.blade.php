@php $menu_object = wp_get_nav_menu_object( get_nav_menu_locations()['header_navigation'] ); @endphp

<header class="sticky z-50 inset-0 w-full py-4 px-5 bg-white border-b-2 border-lower">

	<div class="js__header-container flex items-center justify-between gap-6 w-full max-w-[1280px] mx-auto">
		<a href="{{ home_url('/') }}" title="{{ _x( 'Telescope homepage', 'Accueil Telescope', 'theme-telescope' ) }}"
			class="js__header-logo shrink-0 block w-[12.5rem]">
			<x-svg.logo class="size-full object-contain" />
		</a>
		@php
		wp_nav_menu(
			array(
				'theme_location' => 'header_navigation',
				'container'      => false,
				'menu_class'     => 'js__header-desktop-nav flex gap-5',
			)
		);
		@endphp
		<div class="js__header-desktop-btn lg:min-w-[12.5rem] text-right">
			<x-buttons.button
				:url="get_field( 'contact_page_link', $menu_object )"
				:label="'Contact'"
				:type="'internal'"
				:style="'fill'"
				:color="'primary'"
			/>
		</div>
		<x-buttons.burger-button class="hidden" />
	</div>

	<x-burger-nav :menuObject="$menu_object" />
</header>
