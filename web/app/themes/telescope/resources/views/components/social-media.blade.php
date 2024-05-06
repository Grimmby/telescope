<ul @class([
	'flex items-center gap-4',
	$attributes['class']
])>
	@if( get_field( 'facebook_link', 'options' ) )
		<li>
			<x-buttons.social-button :url="get_field( 'facebook_link', 'options' )" :name="'facebook'" />
		</li>
	@endif
	@if( get_field( 'instagram_link', 'options' ) )
		<li>
			<x-buttons.social-button :url="get_field( 'instagram_link', 'options' )" :name="'instagram'" />
		</li>
	@endif
	@if( get_field( 'twitch_link', 'options' ) )
		<li>
			<x-buttons.social-button :url="get_field( 'twitch_link', 'options' )" :name="'twitch'" />
		</li>
	@endif
</ul>
