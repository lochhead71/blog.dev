@extends('layouts.master')

@section('top-script')

	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/posts.css">

@stop

@section('content')

	<div class="wrapper">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">Create a new entry:</h3>
			</div>
			<div class="panel-body">
			  	{{ Form::open(['action' => 'PostsController@store', 'files' => true, 'method' => 'POST', 'class' => 'form-horizontal']) }}

					@include('posts.form')

				{{ Form::close() }}
			</div>
		</div>
	</div>
@stop