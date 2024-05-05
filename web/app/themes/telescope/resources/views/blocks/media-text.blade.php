{{--
  Title: Media & Text
  Description: Media with text.
  Category: Telescope
  Icon: align-pull-left
  Mode: preview
  Align: full
  SupportsInnerBlocks: true
  SupportsAlign: full
  SupportsMode: true
  SupportsMultiple: true
--}}


<section class="block-media-text">

	<div class="content-container rounded-xl">

		<div @class([
			'flex flex-col gap-8 lg:gap-x-16 p-5 border-2 border-lower rounded-xl',
			'right' === get_field( 'image_position' ) ? 'md:flex-row' : 'md:flex-row-reverse',
		])>
			<div class="relative w-full md:w-1/2 md:min-h-[42.375rem] rounded-lg overflow-hidden parent-reveal">
				<figure class="relative md:absolute inset-0 w-full h-[19.375rem] sm:h-[25rem] md:size-full">
					@php echo wp_get_attachment_image(
						get_field( 'image' ),
						'full',
						true,
						['class' => 'w-full h-full object-cover transition-all duration-[800ms] ease-out r-opacity r-zoom-out-min child-reveal']
					)
					@endphp
				</figure>
			</div>

			<div class="w-full md:w-1/2 lg:p-6">
				<div class="flex flex-col justify-center gap-y-8 size-full">
					<x-heading
						:title="get_field( 'title' )"
						:size="'large'"
						:color="'dark'"
						class="text-center"
					/>

					@if( have_rows( 'buttons' ) )
						<div class="flex flex-wrap items-center justify-center gap-y-2 gap-x-4 transition-all duration-[800ms] ease-out r-opacity r-top-2 reveal-delay-300 scroll-reveal">
							@while( have_rows( 'buttons' ) )
								@php the_row(); @endphp
								<x-buttons.button
									:url="get_sub_field( 'button_url' )"
									:label="get_sub_field( 'button_label' )"
									:type="get_sub_field( 'button_link_type' )"
									:style="get_sub_field( 'button_style' )"
									:color="'primary'"
								/>
							@endwhile
						</div>
					@endif
				</div>
			</div>

		</div>

	</div>

</section>
