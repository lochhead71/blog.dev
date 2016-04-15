<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="More information about Jim Lochhead than any reasonable person would require">
	<meta name="author" content="James R. Lochhead">
	<link rel="shortcut icon" href="../favicon.ico"> 
	<link rel="stylesheet" type="text/css" href="/css/hamburgler.css"/>
	<link rel="stylesheet" type="text/css" href="/css/master.css"/>
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<link href='https://fonts.googleapis.com/css?family=Ubuntu:400,300,700' rel='stylesheet' type='text/css'>
	{{-- Include any bootstrap <links> above the 'top-script' --}}

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

	<div class='header'>
		<div class="mobilenav">
		    <li><a href="#">About Me</a></li>
		    <li><a href="#">Resume</a></li>
		    <li><a href="#">Portfolio</a></li>
		    <li><a href="#">Blog</a></li>
		    <li><a href="#">Contact</a></li>
		</div>
	  
		<a href="javascript:void(0)" class="icon">
		    <div class="hamburger">
		    <div class="menui top-menu"></div>
		    <div class="menui mid-menu"></div>
		    <div class="menui bottom-menu"></div>
		    </div>
		</a>
		
		

	</div>

   @yield('content')
	
	{{-- Include any bootstrap <scripts> above the 'bottom-script' --}}

	<script src='/js/jquery-2.2.0.min.js'></script>
	<script src='/js/hamburgler.js'></script>
	<script>
		setTimeout(function(){
			$(".alert").slideUp(900);
		}, 1000);
	</script>

	{{-- unique JS inclusions for view --}}
	@yield('bottom-script')

</body>
</html>
