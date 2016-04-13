"use strict";

(function(){

	// declaring global variables
	var map = {};
    var geocoder = {};
    var marker = {};

    var lat = "29.424122";
    var lon = "-98.493628";

    // function to pass LatLong to OpenWeatherMap API
	function onSubmitLatLon() {
		lat = $('#lat').val();
		lon = $('#long').val();
		execute();
	}

	// capitalizing the weather description
	function capitalize(string) {
		string = string.split("");
		string[0] = string[0].toUpperCase();
		string = string.join("");
		return string;
	};

	// coverting metadata from API to a day of the week
	function dayOfTheWeek(d){
		var weekday = new Array(7);
		weekday[0]=  "Sunday";
		weekday[1] = "Monday";
		weekday[2] = "Tuesday";
		weekday[3] = "Wednesday";
		weekday[4] = "Thursday";
		weekday[5] = "Friday";
		weekday[6] = "Saturday";
		return weekday[d.getDay()];
	};

	// function to traverse the node variables in the API array
	function displayToD(ids) {
		 $('div.wrapper').each(function(){
    		if ($(this).data('id') != ids[0] && $(this).data('id') != ids[1] && $(this).data('id') != ids[2]) {
	            	$(this).hide();
			} else {
				$(this).show();
			};
		});
	};

	// Code to allow City input to generate latitude and longitude
	function initMap() {
	  map = new google.maps.Map(document.getElementById('map-canvas'), {
	    zoom: 12,
	    center: {lat: 29.4241219, lng: -98.493628199}
	});
	  // console.log(map);
		geocoder = new google.maps.Geocoder();

	 	geocodeAddress(geocoder, map);
	}

	function geocodeAddress(geocoder, resultsMap) {
	  var address = document.getElementById('city').value;
	  // console.log("this ran");
	  geocoder.geocode({'address': address}, function(results, status) {
	    if (status === google.maps.GeocoderStatus.OK) {
	      resultsMap.setCenter(results[0].geometry.location);
	      // console.log(results[0].geometry.location);
	    	$("#lat").val(results[0].geometry.location.lat());
	    	$("#long").val(results[0].geometry.location.lng());
	    	onSubmitLatLon();

	      marker = new google.maps.Marker({
	        map: resultsMap,
	        position: results[0].geometry.location,
	        draggable: true
	      });

	      marker.addListener('dragend', function() {
	      	map.setZoom(12);
		    map.setCenter(marker.getPosition());
		    $("#lat").val(marker.getPosition().lat());
	    	$("#long").val(marker.getPosition().lng());
	    	onSubmitLatLon();
		  });
	      // console.log("this ran");
	    } else {
	      alert('Geocode was not successful for the following reason: ' + status);
	    }
	  });
	}

	// OpenWeatherMap API Call
	function execute() {
		// console.log('lat: ' + lat)
		// console.log('lon: ' + lon)
		$.get("http://api.openweathermap.org/data/2.5/forecast", {
		    APPID: "5c70f220efd6630553be87a8a245afeb",
			lat: lat,
			lon: lon,
		    units: "imperial",
		    cnt:24
		}).done(function(data) {
			console.log(data);
			var weatherCond = "";
			// code to build my forecast objects
		    data.list.forEach(function(day, index) {
		    	weatherCond += "<div class='wrapper' data-id='" + index + "'>";
				weatherCond += "<h3 class='day'>" + dayOfTheWeek(new Date(day.dt*1000)) + "</h3>";
		    	weatherCond += "<h3 class='description'>" + capitalize(day.weather[0].description) + "</h3>";
		    	if (day.clouds.all <= 20) {
		    		weatherCond += "<img src='/img/weathMap_sunny.png' alt='sunny logo' height='60px'>";
		    	} else if ((day.clouds.all >= 21) && (day.clouds.all <= 70)) {
		    		weatherCond += "<img src='/img/weathMap_partlyCloudy.png' alt='partly cloudy logo' height='60px'>";
		    	} else if (day.clouds.all >=71){
		    		weatherCond += "<img src='/img/weathMap_cloudy.png' alt='cloudy logo' height='60px'>";
		    	};
		    	weatherCond += "<p class = 'stats'> <strong>Temperature:</strong><br>" + parseInt(day.main.temp) + "&deg; Fahrenheit</p>";
		    	if (day.main.temp <= 50) {
			    	weatherCond += "<img src='/img/weathMap_cold.png' alt='cold logo' height='60px'>"
				    } else if (day.main.temp >= 51 && day.main.temp <= 85) {
			    	weatherCond += "<img src='/img/weathMap_mild.png' alt='cold logo' height='60px'>"
				    } else if (day.main.temp >= 86) {
			    	weatherCond += "<img src='/img/weathMap_hot.png' alt='cold logo' height='60px'>"
				};
		    	weatherCond += "<p class = 'stats'><strong>Wind Speed:</strong><br>" + day.speed + " mph</p>";
		    	weatherCond += "</div>"
            });
			$(".forecast").html("")
	        $(".forecast").append(weatherCond);
	        $("#city").val(data.city.name);
        
		// default display setting
			displayToD([4, 12, 20]);
     	// closing .done function
		});
	// closing execute function
    };

    execute();
	initMap();
    // longitude and latitude inputs
	$("#submit").click(onSubmitLatLon);

	// this does something

	$("#submitCity").click(function(){
		geocodeAddress(geocoder, map);
	});

	// time of day toggle buttons
    $('#morn').click(function() {
    	displayToD([2, 10, 18]);
    });
     $('#aft').click(function() {
    	displayToD([4, 12, 20]);
    });
     $('#eve').click(function() {
    	displayToD([6, 14, 22]);
    });
// closing IFFE statement
}());