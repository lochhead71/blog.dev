@extends('layouts.master')

@section('content')

	<div id="hdln-aboutMe" class="container-fluid">
		<h1 class="hdln">About Me</h1>
	</div>
	@include('about_me')

	<div id="hdln-resume" class="container-fluid">
		<h1 class="hdln">Resume</h1>
	</div>
	@include('resume')

	<div id="hdln-portfolio" class="container-fluid">
		<h1 class="hdln">Portfolio</h1>
	</div>
	@include('portfolio')

	<div id="hdln-blog" class="container-fluid">
		<h1 class="hdln">Blog</h1>
	</div>
	@include('posts.index')

	<div id="hdln-contact" class="container-fluid">
		<h1 class="hdln">Contact</h1>
	</div>
	@include('contact')

@stop



