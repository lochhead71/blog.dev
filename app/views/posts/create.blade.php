@extends('layouts.master')

@section('top-script')
	<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
	<script>tinymce.init({ selector:'textarea' });</script>
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
