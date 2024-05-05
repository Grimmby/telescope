{{--
  Title: Hero banner
  Description: Hero banner.
  Category: Telescope
  Icon: align-full-width
  Mode: preview
  Align: full
  SupportsInnerBlocks: true
  SupportsAlign: full
  SupportsMode: true
  SupportsMultiple: true
--}}


<section class="block-hero-banner">

	<div class="content-container">

		<div class="relative flex justify-center items-center w-full max-w-[1280px] min-h-[26.5rem] md:min-h-[35.938rem] mx-auto py-16 px-4 rounded-xl overflow-hidden">
			<figure class="absolute z-[1] inset-0 size-full bg-black overflow-hidden parent-reveal after:content-[''] after:absolute after:inset-0 after:size-full after:bg-black after:opacity-55">
				@php echo wp_get_attachment_image(
					get_field( 'background_image' ),
					'full',
					true,
					['class' => 'w-full h-full object-cover transition-all duration-[2000ms] ease-out r-zoom-out-min child-reveal']
				)
				@endphp
			</figure>

			<div class="relative z-[2] flex flex-col items-center gap-y-8 w-full max-w-[768px] mx-auto">
				<x-heading
					:title="get_field( 'title' )"
					:size="'large'"
					:color="'light'"
					class="text-center"
				/>
				<x-text
					:text="get_field( 'text' )"
					:size="'large'"
					:color="'light'"
					class="text-center transition-all duration-[800ms] ease-out r-opacity reveal-delay-300 scroll-reveal"
				/>
				@if( have_rows( 'buttons' ) )
					<div class="flex flex-wrap items-center justify-center gap-y-2 gap-x-4 transition-all duration-[800ms] ease-out r-opacity r-top-2 reveal-delay-400 scroll-reveal">
						@while( have_rows( 'buttons' ) )
							@php the_row(); @endphp
							<x-buttons.button
								:url="get_sub_field( 'button_url' )"
								:label="get_sub_field( 'button_label' )"
								:type="get_sub_field( 'button_link_type' )"
								:style="get_sub_field( 'button_style' )"
								:color="'white'"
							/>
						@endwhile
					</div>
				@endif
			</div>
		</div>

	</div>

</section>

