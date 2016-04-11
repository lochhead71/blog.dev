@extends('layouts.master')

@section('top-script')

@stop

@section('content')

	{{{'This is my portfolio.'}}}
	<a href="{{{ action('HomeController@showResume')}}}">Jim Lochhead's Resume</a>

@stop

@section('bottom-script')

@stop
