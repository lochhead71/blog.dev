@extends('layouts.master')

@section('top-script')

	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/posts.css">

@stop

@section('content')

	<div class="wrapper">
		<div class="panel panel-default">
		  <div class="panel-heading">
		    <h3 class="panel-title">{{{ $post->title }}}</h3>
		  </div>
		  <div class="panel-body">
		  	{{{ $post->body }}}
		  </div>
		</div>
		<a href="{{{ action('PostsController@index') }}}"><span class="badge">Back to Index</span></a>
	</div>


@stop