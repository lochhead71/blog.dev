@extends('layouts.master')

@section('top-script')

	<title>Friendly Weather Update</title>
	<link rel="stylesheet" href="/css/weather.css">
	<link href='https://fonts.googleapis.com/css?family=Courgette|Oswald:400,300,700' rel='stylesheet' type='text/css'>
	
@stop

@section('content')

	<header id="header">
		<h1 id="pageTitle">What's happening<br>with the weather?</h1>
		<img src="/img/weathMap_rainbow.png" alt="rainbow cloud logo" height="75px">
	</header>

	<main>
		<div class='lableButton'>
			<h2 class="boxTitle">3-Day Forecast:</h2>
			<div>
				<button class='toggle' id='morn'>Morning</button>
				<button class='toggle' id='aft'>Afternoon</button>
				<button class='toggle' id='eve'>Evening</button>
			</div>	
		</div>	
		<div class='forecast'></div>
		<div class='map'>
			<div class='coordinates'>
				<h2 class="boxTitle">Change location:</h2>
				<label for="lat">Latitude</label>
				<input name="lat" type="text" id="lat">
				<label for="long">Longitude</label>
				<input name="long" type="text" id="long">
				<button id='submit'>Submit</button>
			</div>
			<div class='coordinates'>
				<h2  class="boxTitle">Enter City Name</h2>
				<input type="text" name="cityName" id="city" value="San Antonio, TX">
				<button id="submitCity">Submit</button>
			</div>
		</div>
		<div id='map-canvas'></div>

	</main>

@stop

@section('bottom-script')


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDk1Ce5UPKrDcvmw_4iqMMa4VIVSPaViFE"></script>

	<script src="/js/weather_map.js"></script>
	
@stop
