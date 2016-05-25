@extends('layouts.master')

@section('content')

	<div class="wrapper">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">Log in to your account:</h3>
			</div>
			<div class="panel-body">
			  	{{ Form::open(['action' => 'UserController@doLogin', 'method' => 'POST', 'class' => 'form-horizontal']) }}

					<div class="input-group">
					{{ Form::label('email', 'E-mail address', ['class' => 'input-group-addon' ]) }}
					{{ Form::text('email', null, ['class' => 'form-control']) }}
				</div>
					@if ($errors->has('email'))
						<p class="warning">{{{ $errors->first('email') }}}</p>
					@endif
				<div class="input-group">

					{{ Form::label('password', 'Password', ['class' => 'input-group-addon' ]) }}
					{{ Form::password('password', null, ['class' => 'form-control']) }}
				</div>
					@if ($errors->has('password'))
						<p class="warning">{{{ $errors->first('password') }}}</p>
					@endif
				<input type="submit" class="btn btn-primary" value="Submit">

				{{ Form::close() }}
			</div>
		</div>
	</div>
@stop