<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="More information about Jim Lochhead than any reasonable person would require">
    <meta name="author" content="James R. Lochhead">
    <link rel="icon" href="../../favicon.ico">
	{{-- Include any bootstrap <links> above the 'top-script' --}}

	{{-- unique CSS inclusions for view --}}
	@yield('top-script')

</head>
<body>

    @yield('content')
	
	{{-- Include any bootstrap <scripts> above the 'bottom-script' --}}
	
    <script src="/js/jquery-2.2.0.min.js"></script>

	{{-- unique JS inclusions for view --}}
	@yield('bottom-script')

</html>
