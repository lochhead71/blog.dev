@extends('layouts.master')

@section('top-script')

	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/posts.css">

@stop

@section('content')

	<div class="row">
		<div class="col-xs-12 col-sm-8 col-md-6">
			<div class="wrapper">
				<h2>All the posts...</h2>
				<hr>
				@foreach($posts as $post)
					<div class="dateTime">
						<p>Written {{{ $post->created_at->diffForHumans() . " by " . $post->user->first_name }}}</p>
					</div>
					<h4>{{{ $post->title }}}</h4>
					<a href="{{{ action('PostsController@show', $post->id) }}}"><span class="badge">View post</span></a>
					<a href="{{{ action('PostsController@edit', $post->id) }}}"><span class="badge">Edit post</span></a>
					<hr>
				@endforeach
				<div>
					{{ $posts->links() }}
				</div>
				<a class="btn btn-primary" href="{{{ action('PostsController@create') }}}">Create new post</a>
			</div>
		</div>
	</div>


@stop
