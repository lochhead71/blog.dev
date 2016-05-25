@extends('layouts.master')

@section('content')

	<div id="hdln-aboutMe" class="container-fluid">
		<h2 class="hdln">About Me</h2>
	</div>
	@include('about_me')

	<div id="hdln-resume" class="container-fluid">
		<h2 class="hdln">Resume</h2>
	</div>
	@include('resume')

	<div id="hdln-portfolio" class="container-fluid">
		<h2 class="hdln">Web Portfolio</h2>
	</div>
	@include('portfolio')

	<div id="hdln-blog" class="container-fluid">
		<h2 class="hdln">Blog</h2>
	</div>
	@include('posts.index')

	<div id="hdln-contact" class="container-fluid">
		<h2 class="hdln">Contact</h2>
	</div>
	@include('contact')

@stop



