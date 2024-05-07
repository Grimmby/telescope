<footer class="w-full py-12 lg:py-[5.188rem] px-5 sm:px-8 border-t-2 border-lower bg-white">

	<div class="flex flex-wrap items-start justify-between gap-y-12 gap-x-6 w-full max-w-[1280px] mx-auto transition-all duration-500 r-opacity reveal-delay-200 scroll-reveal">

		<a href="{{ home_url('/') }}" title="{{ __( 'Accueil Telescope', 'theme-telescope' ) }}"
			class="js__header-logo shrink-0 block w-[12.5rem]">
			<x-svg.logo class="size-full object-contain" />
		</a>

		<div class="flex flex-col md:flex-row justify-start lg:justify-end items-start gap-y-12 gap-x-20 lg:gap-x-28 w-full lg:w-auto">
			@php
			wp_nav_menu(
				array(
					'theme_location' => 'footer_navigation',
					'menu_class' => 'flex flex-col md:flex-row gap-y-12 gap-x-20 lg:gap-x-28',
					'container'  => false,
					'items_wrap' => '<ul class="%2$s">%3$s</ul>',
				)
			);
			@endphp
			<div>
				<p class="mb-6 font-secondary text-[1.125rem] font-semibold">
					{{ __( 'Suivez-nous', 'theme-telescope' ) }}
				</p>
				<x-social-media />
			</div>
		</div>

	</div>

</footer>
