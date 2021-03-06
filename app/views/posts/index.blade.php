<div id="post-index" class="container-fluid">
	<div class="row">
		<div class="col-xs-12 col-md-6">
			<div class="wrapper">
				@if (Auth::check())
					<?php $loggedInUser = Auth::user(); ?>
					<p>Welcome, {{{ $loggedInUser->first_name }}}...</p>
				@endif
				<h2>All the posts...</h2>
				<hr>
				@foreach($posts as $post)
					<div class="dateTime">
						<p>Written {{{ $post->created_at->diffForHumans() . " by " . $post->user->first_name }}}</p>
					</div>
					<h4>{{{ $post->title }}}</h4>
					<a class="post-view" data-id="{{{ $post->id }}}" href="{{{ action('PostsController@show', $post->id) }}}"><span class="badge">View post</span></a>
					@if (Auth::check() && $post->isAuthor(Auth::user()))
							<a href="{{{ action('PostsController@edit', $post->id) }}}"><span class="badge">Edit post</span></a>
					@endif
					<hr>
				@endforeach
				<div>
					{{ $posts->appends(array('search'=>Input::get('search')))->links()}}
				</div>
				<div class='row'>
					{{ Form::open(array('action' => 'PostsController@index', 'method' => 'GET',)) }}
					<div class='col-xs-8'>
						{{ Form::text('search', null, array('placeholder'=>'Search blog by keyword', 'class' => 'form-control')) }}
					</div>
					<div class='col-xs-4'>
						{{ Form::submit('Submit', array('class' => 'btn btn-primary')) }}
					</div>
					{{ Form::close() }}
				</div> {{-- end ROW --}}
				@if (Auth::check())
					<a class="btn btn-primary" href="{{{ action('PostsController@create') }}}">Create new post</a>
					<a class="btn btn-primary" href="{{{ action('UserController@logout') }}}">Log Out</a>
				@endif
			</div>
		</div>
	</div>
</div>

<div id="post-show">
</div>