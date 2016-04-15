@extends('layouts.master')

@section('top-script')

	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/posts.css">

@stop

@section('content')

	<div class="wrapper">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">{{{ $post->title }}}</h3>
			</div>
			<div class="panel-body">
				{{{ $post->body }}}
			</div>
			<div class="dateTime">
				{{{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A') }}}
			</div>
		</div>
		<a href="{{{ action('PostsController@index') }}}"><span class="badge">Back to Index</span></a>
		<a href="{{{ action('PostsController@edit', $post->id) }}}"><span class="badge">Edit post</span></a>
		{{ Form::open(array('action' => array('PostsController@destroy', $post->id), 'method' => 'DELETE')) }}
			{{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
		{{ Form::close() }}
	</div>

@stop