@extends('layouts.master')

@section('top-script')

	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/posts.css">

@stop

@section('content')

	<div class="wrapper">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Edit entry:</h3>
			</div>
			<div class="panel-body">
				{{ Form::model($post, ['action' => ['PostsController@update', $post->id], 'method' => 'PUT', 'class' => 'form-horizontal']) }}

					@include('posts.form')

				{{ Form::close() }}
			</div>
		</div>
	</div>

@stop
