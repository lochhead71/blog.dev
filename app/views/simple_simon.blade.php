@extends('layouts.master')

@section('top-script')

	<title>Simple Simon Redux</title>
	<link rel="stylesheet" href="/css/simon.css">
	<link href='https://fonts.googleapis.com/css?family=Krona+One' rel='stylesheet' type='text/css'>
	
@stop

@section('content')

	<h1 class="pageTitle">Simple Simon Game</h1>
	<div id="upperContainer">
		<div id="upperLeft" data-id="0" data-color="#05fa42"></div>
		<div id="upperRight" data-id="1" data-color="#ff0000"></div>
	</div>
	<div id="lowerContainer">
		<div id="lowerLeft" data-id="3" data-color="#ffee00"></div>
		<div id="lowerRight" data-id="2" data-color="#00ddff"></div>
	</div>
	<div id="medallion">
		<h4 class="label">Round</h4>
		<h1 class="score" id="round">0</h1>
		<div id="lowerScore">
			<h4 class="smLabel">High Score</h4>
			<h1 class="smScore" id="highScore">0</h1>
			<h4 class="smLabel">Wins for Simon</h4>
			<h1 class="smScore" id="simonScore">0</h1>
		</div>		
		<button id="startGame"> Start Game</button>
	</div>

@stop

@section('bottom-script')

	<script src="/js/simpleSimon.js"></script>

@stop