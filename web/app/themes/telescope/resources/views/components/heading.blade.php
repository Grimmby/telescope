@props([
	'title',
	'level' => 'h2',
	'size' => 'medium', // 'small', 'medium', 'large'
	'color' => 'dark', // 'light' or 'dark'
])

@if( $title )
	<div @class([
		'relative flex flex-col parent-reveal',
		$attributes['class'],
	])>
		<div class="overflow-hidden">
			<{{ $level }} @class([
				'!font-secondary font-semibold leading-tight',
				'transition-all duration-700 ease-out r-opacity r-top-3 reveal-delay-100 child-reveal',
				'text-2xl' => $size === 'small',
				'text-3xl' => $size === 'medium',
				'text-3xl md:text-4xl' => $size === 'large',
				'text-white' => $color === 'light',
				'text-black' => $color === 'dark',
			])>
				{{ $title }}
			</{{ $level }}>
		</div>
	</div>
@endif
