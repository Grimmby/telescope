@props(['post'])

<div @class([
	'group relative flex flex-col gap-y-4 pointer-events-all',
	'transition-all duration-700 ease-out r-opacity r-right-2 child-reveal',
	$attributes['class']
])>
	<a href="{{ get_permalink( $post->ID ) }}" title="{{ $post->post_title }}"
		class="absolute z-10 inset-0 size-full"></a>
	<figure class="w-full h-[12.063rem] sm:h-[13.688rem] rounded-xl overflow-hidden">
		{!! get_the_post_thumbnail( $post->ID, 'medium', array( 'class' => 'size-full object-cover transition-all duration-500 group-hover:scale-105' ) ) !!}
	</figure>
	<p class="font-secondary text-lg font-semibold leading-tight transition-all duration-300 group-hover:text-primary">
		{{ $post->post_title }}
	</p>
	<span class="text-base text-medium">
		{!! get_the_date( 'j M. Y', $post->ID ); !!}
	</span>
</div>
