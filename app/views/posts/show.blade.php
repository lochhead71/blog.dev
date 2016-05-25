<div class="wrapper">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">{{{ $post->title }}}</h3>
		</div>
		<div class="panel-body">
			<p>{{{ $post->body }}}</p>
			<img src="{{{ $post->image }}}" alt="">
		</div>
		<div class="dateTime">
			{{{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A') }}}
		</div>
	</div>
	<a id="post-back" href="{{{ action('PostsController@index') }}}"><span class="badge">Back to Index</span></a>
	@if (Auth::check() && $post->isAuthor(Auth::user()))
		<a href="{{{ action('PostsController@edit', $post->id) }}}"><span class="badge">Edit post</span></a>
		{{ Form::open(array('action' => array('PostsController@destroy', $post->id), 'method' => 'DELETE')) }}
			{{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
		{{ Form::close() }}
	@endif
</div>