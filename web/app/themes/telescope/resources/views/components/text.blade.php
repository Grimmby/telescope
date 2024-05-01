@props([
	'text' => null,
	'size' => 'medium', // 'medium' or 'large'
	'color' => 'dark', // 'light' or 'dark'
])

@if( $text )
	<div @class([
		'text-base' => $size === 'medium',
		'text-md' => $size === 'large',
		'text-white' => $color === 'light',
		'text-black' => $color === 'dark',
		$attributes['class'],
	])>
		{!! $text !!}
	</div>
@endif
