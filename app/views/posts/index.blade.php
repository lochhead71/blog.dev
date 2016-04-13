@extends('layouts.master')

@section('top-script')

	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/posts.css">

@stop

@section('content')

	<div class="wrapper">
		<h2>All the posts...</h2>
		<hr>
		@foreach($posts as $post)
			<h4>{{{ $post->title }}}</h4>
			<a href="{{{ action('PostsController@show', $post->id) }}}"><span class="badge">View post</span></a>
			<hr>
		@endforeach
	</div>


@stop
