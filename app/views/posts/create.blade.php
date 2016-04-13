@extends('layouts.master')

@section('top-script')

	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/posts.css">

@stop

@section('content')

	<div class="wrapper">
		<div class="panel panel-default">
		  <div class="panel-heading">
		    <h3 class="panel-title">Create a new entry:</h3>
		  </div>
		  <div class="panel-body">
			<form method ="post" action="{{{ action('PostsController@store') }}}">
				<div class="input-group">
				  <span class="input-group-addon" id="sizing-addon2">Title</span>
				  <input type="text" class="form-control"  name="title" value="{{{ Input::old('title') }}}">
				</div>
					@if ($errors->has('title'))
						<p class="warning">{{{ $errors->first('title') }}}</p>
					@endif
				<div class="input-group">
					<span class="input-group-addon" id="sizing-addon2">Body</span>
					<textarea name="body"  class="form-control" cols="30" rows="10" value="{{{ Input::old('body') }}}"></textarea>
				</div>
					@if ($errors->has('body'))
						<p class="warning">{{{ $errors->first('body') }}}</p>
					@endif
				<input type="submit" class="btn btn-primary" value="Save">
			</form>
		  </div>
		</div>
	</div>
@stop