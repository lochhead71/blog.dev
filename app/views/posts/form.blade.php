<div class="input-group">
	{{ Form::label('title', 'Title', ['class' => 'input-group-addon' ]) }}
	{{ Form::text('title', null, ['class' => 'form-control']) }}
</div>
	@if ($errors->has('title'))
		<p class="warning">{{{ $errors->first('title') }}}</p>
	@endif
<div class="input-group">

	{{ Form::label('body', 'Body', ['class' => 'input-group-addon' ]) }}
	{{ Form::textarea('body', null, ['class' => 'form-control', 'cols'=>'30', 'rows'=>'10']) }}
</div>
<div class="input-group">
	{{ Form::label('image', 'Image') }}
	{{ Form::file('image') }}
</div>
	@if ($errors->has('body'))
		<p class="warning">{{{ $errors->first('body') }}}</p>
	@endif
<input type="submit" class="btn btn-primary" value="Save">