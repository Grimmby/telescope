@props([
	'url',
	'name',
])

<a href="{{ $url }}"
	title="{{ strtoupper( $name ) }}"
	target="_blank"
	rel="noopener noreferrer nofollow"
	class="block size-[1.3rem] text-black hover:text-primary">
	<x-dynamic-component :component="'svg.icon-' . strtolower( $name )" class="w-full h-full object-contain" />
</a>
