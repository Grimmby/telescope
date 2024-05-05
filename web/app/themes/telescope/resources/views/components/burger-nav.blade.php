@props(['menuObject'])

<div class="js__burger_nav group">
	<div @class([
		'fixed z-40 top-[4.625rem] left-0 w-full max-w-[390px] h-[calc(100vh-4.625rem)]',
		'flex flex-col justify-start items-center gap-8 px-5 pt-14 pb-5 bg-white',
		'transition-all duration-300 ease-out',
		'-translate-x-[390px] group-[.active]:translate-x-0',
	])>
			@php
			wp_nav_menu(
				array(
					'theme_location' => 'header_navigation',
					'container'      => false,
					'menu_class'     => 'flex flex-col items-center gap-4',
				)
			);
			@endphp
			<x-buttons.button
				:url="get_field( 'contact_page_link', $menuObject )"
				:label="'Contact'"
				:type="'internal'"
				:style="'fill'"
				:color="'primary'"
			/>
	</div>
</div>
