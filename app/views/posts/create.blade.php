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
