<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>James R. Lochhead: Designer|Developer</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/css/resume.css">
	<link rel="stylesheet" type="text/css" href="/css/posts.css">
	<link rel="stylesheet" type="text/css" href="/css/master.css">
	<link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Ubuntu:400,300,400italic,700,500' rel='stylesheet' type='text/css'>
	<script src="https://use.fontawesome.com/ba8c8fa918.js"></script>

	{{-- unique CSS inclusions for view --}}
	@yield('top-script')
</head>
<body>
	@if (Session::has('successMessage'))
		<div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
	@endif
	@if (Session::has('errorMessage'))
		<div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
	@endif
	<header class="container-fluid">
		<div id="top-div" class="row">
			<div class="col-xs-6 col-sm-9">
				<img src="/img/jrl_logo.svg" alt="" id="logo">
				<img src="/img/jrl_logo_ds.svg" alt="" id="logo_ds">
			</div>
			<div class="col-xs-6  col-sm-3">
				<p id="desc">Graphic Designer<br>Web Developer</p>
			</div>
		</div>
	</header>

	@yield('content')
	
	{{-- Include any bootstrap <scripts> above the 'bottom-script' --}}

	<script src='/js/jquery-2.2.0.min.js'></script>
	<script src='/js/bootstrap.min.js'></script>
	<script src='/js/master.js'></script>
	<script src='/js/resume.js'></script>
	<script src="/js/portfolio.js"></script>
	<script src="/js/posts.js"></script>


	{{-- unique JS inclusions for view --}}
	@yield('bottom-script')

</body>
</html>
