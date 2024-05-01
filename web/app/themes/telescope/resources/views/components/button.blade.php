@props([
	'url',
	'label',
	'type' => 'internal', // 'internal' or 'external'
	'style' => 'fill', // 'fill' or 'outline'
	'color' => 'primary', // 'primary' or 'white'
])

@if( $url && $label  )

	<a href="{{ $url }}" title="{{ $label }}"
		target="{{ ( $type === 'internal' ? '_self' : '_blank' ) }}"
		@if( $type === 'external' ) rel="noopener noreferrer nofollow" @endif
		@class([
			'group flex items-center justify-center gap-2.5 py-2.5 px-5 text-base font-semibold leading-tight text-center border rounded-full transition-all duration-200',
			'border-primary' => $color === 'primary',
			'border-white' => $color === 'white',
			'text-white bg-primary hover:bg-primary-darken hover:border-primary-darken' => $color === 'primary' && $style === 'fill',
			'text-black bg-white hover:bg-low hover:border-low' => $color === 'white' && $style === 'fill',
			'text-primary hover:text-white hover:bg-primary' => $color === 'primary' && $style === 'outline',
			'text-white hover:text-black hover:bg-white' => $color === 'white' && $style === 'outline',
			$attributes['class'],
		])>
		{{ $label }}
	</a>

@endif

