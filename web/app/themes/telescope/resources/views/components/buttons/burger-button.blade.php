<button @class([
	'js__burger-btn group size-[1.5rem]',
	$attributes['class']
])>
	<x-svg.icon-burger class="block group-[.active]:hidden size-full object-contain" />
	<x-svg.icon-close class="hidden group-[.active]:block size-full object-contain" />
</button>
