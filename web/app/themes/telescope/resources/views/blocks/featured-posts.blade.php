{{--
  Title: Featured posts
  Description: Featured posts.
  Category: Telescope
  Icon: columns
  Mode: preview
  Align: full
  SupportsInnerBlocks: true
  SupportsAlign: full
  SupportsMode: true
  SupportsMultiple: true
--}}

@php
$swiper_id     = uniqid();
$featured_type = get_field( 'featured_type' );

if( $featured_type === 'auto' ) {
	$posts_query = new \WP_Query(
		array(
			'post_type'      => 'post',
			'posts_per_page' => 10,
			'orderby'        => 'date',
			'order'          => 'DESC',
		)
	);
}
@endphp

<section class="block-featured-posts">

	<div class="content-container">
		<div class="flex flex-col gap-y-8 w-full max-w-[1024px] mx-auto">
			<x-heading
				:title="get_field( 'title' )"
				:size="'medium'"
				:color="'dark'"
				class="text-left"
			/>

			<div class="w-full xs-2:overflow-hidden">
				<div class="js__slider-featured-posts"
					data-swiper-id="{{ $swiper_id }}" id="swiper-{{ $swiper_id }}">
					<div class="swiper-wrapper pointer-events-none parent-reveal">
						@if( $featured_type === 'auto' && $posts_query->have_posts() )
							@php $counter = 1; @endphp
							@while( $posts_query->have_posts() )
								@php
									$posts_query->the_post();
									global $post;
								@endphp
								<div class="swiper-slide">
									<x-cards.card-post :post="$post" class="reveal-delay-{{ $counter }}00" />
								</div>
								@php $counter++; @endphp
							@endwhile
							@php wp_reset_postdata(); @endphp
						@else
							@foreach ( get_field( 'posts' ) as $post )
								@php
									$post = $post['post'];
									setup_postdata($post);
								@endphp
								<div class="swiper-slide">
									<x-cards.card-post :post="$post" class="reveal-delay-{{ $loop->index + 1 }}00" />
								</div>
							@endforeach
							@php wp_reset_postdata(); @endphp
						@endif
					</div>
				</div>

				<div @class([
					'flex justify-end w-full mt-8  transition-all duration-500 r-opacity scroll-reveal',
					'md-2:hidden' => ( $featured_type === 'auto' && count( $posts_query->posts) === 3 ) || ( $featured_type === 'manual' && count( get_field( 'posts' ) ) === 3 ),
					'xs-2:hidden' => ( $featured_type === 'auto' && count( $posts_query->posts) === 2 ) || ( $featured_type === 'manual' && count( get_field( 'posts' ) ) === 2 ),
				])>
					<div class="flex items-center gap-x-2">
						<button class="js-slider-featured-posts-btn-prev-{{ $swiper_id }} size-12 p-4 text-white bg-primary rounded-full rotate-180">
							<x-svg.icon-chevron class="size-full object-contain" />
						</button>
						<button class="js-slider-featured-posts-btn-next-{{ $swiper_id }} size-12 p-4 text-white bg-primary rounded-full">
							<x-svg.icon-chevron class="size-full object-contain" />
						</button>
					</div>
				</div>
			</div>
		</div>

	</div>

</section>
