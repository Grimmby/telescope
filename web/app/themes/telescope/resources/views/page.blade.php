@extends('layouts.app')

@section('content')
	<div class="flex flex-col gap-20 pt-6 bg-white">
		@while(have_posts()) @php(the_post())
			@includeFirst(['partials.content-page', 'partials.content'])
		@endwhile
	</div>
@endsection
