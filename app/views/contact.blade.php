<div id="body-contact" class="container-fluid">
	<div>
		<a href="mailto:lochhead71@gmail.com" target="_blank"><i class="fa fa-envelope" aria-hidden="true"></i></a>
		<a href="http://www.linkedin.com/in/jlochhead" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
		<a href="http://github.com/lochhead71" target="_blank"><i class="fa fa-github" aria-hidden="true"></i></a>
		<a href="http://twitter.com/lochhead_james" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
	</div>
	<div>
		@if (Auth::check())
			<a href="{{{ action('UserController@logout') }}}"><span class="badge ltBlue">Log Out</span></a>
		@else
			<a href="{{{ action('UserController@showLogin') }}}"><span class="badge ltBlue">Log In</span></a>
		@endif
	</div>
</div>