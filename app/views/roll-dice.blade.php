@extends('layouts.master')

@section('content')

<h3>The roll is {{{ $roll }}} </h3>
<h3>Your guess is {{{ $guess }}}</h3>

@if($roll != $guess)
	<h3>Your guess does not match.</h3>
@else
	<h3>Congratulations! You guess right!</h3>
@endif

@stop