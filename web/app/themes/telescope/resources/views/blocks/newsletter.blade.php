{{--
  Title: Newsletter
  Description: Newsletter.
  Category: Telescope
  Icon: email-alt
  Mode: preview
  Align: full
  SupportsInnerBlocks: true
  SupportsAlign: full
  SupportsMode: true
  SupportsMultiple: true
--}}

<section class="block-newsletter">

	<div class="content-container">

		<div class="flex flex-col items-center gap-y-8 w-full max-w-[768px] mx-auto">
			<x-heading
				:title="get_field( 'title' )"
				:size="'small'"
				:color="'dark'"
				class="text-center"
			/>
			<x-text
				:text="get_field( 'text' )"
				:size="'medium'"
				:color="'dark'"
				class="text-center transition-all duration-[800ms] ease-out r-opacity reveal-delay-300 scroll-reveal"
			/>
			<div class="flex items-center p-1 border-2 border-low rounded-full overflow-hidden transition-all duration-700 ease-out r-top-2 r-opacity reveal-delay-300 scroll-reveal">
				<input type="email" placeholder="Votre email"
					class="w-full sm:min-w-[20rem] min-h-[2.6rem] px-3 rounded-l-full border-none outline-none">
				<button @class([
					'shrink-0 py-2.5 px-5 text-base font-semibold leading-tight text-center',
					'text-white bg-primary hover:bg-primary-darken border border-primary hover:border-primary-darken rounded-full transition-all duration-200',
				])>
					{{ __( 'Je m\'inscris', 'theme-telescope' ) }}
				</button>
			</div>
		</div>

	</div>

</section>
