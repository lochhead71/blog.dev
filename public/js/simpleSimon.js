"use strict";

(function() {

	var uprLft = $("#upperLeft");
	var uprRgt = $("#upperRight");
	var lwrRgt = $("#lowerRight");
	var lwrLft = $("#lowerLeft");

	var simonArray = [];
	var currentIndex = 0;
	var simonWinCount = 0;
	var roundCount = 0;
	var highScoreCount = 0;

	var clickInterval = 500;
	var sequenceInterval = 600;

	// function to light up quadrants

	function lightItUp(colorId) {
		var quadrant = $('[data-id="' + colorId + '"]');
		quadrant.css('background-color', quadrant.data('color'));
		setTimeout(function(){
			quadrant.css("background-color", "");
		}, clickInterval);
	};

	// function getting Simon to program sequences

	function getRandomInt() {
		return Math.floor(Math.random()*4);
	}

	function newRound() {
		var rando = getRandomInt();
		simonArray.push(rando.toString());
		roundNum();
	}

	// Getting Simon to light up quadrants based on simonArray

	function playSimonSeq() {
		newRound();
		var i = 0;
		var intervalId = setInterval(function() {
			lightItUp(simonArray[i]);
			i++;
		if (i == simonArray.length) {
			clearInterval(intervalId);
			}
		}, sequenceInterval);
	}

	// comparing user input to simonArray

	function compareValue(color) {
		var currentUserInput = $(color).data('id');
		if (currentUserInput == simonArray[currentIndex]) {
			currentIndex++;

		} else {
			currentIndex = 0;
			highScore();
			simonArray = [];
			simonWinCount += 1;
			alert("You screwed the pooch!")
			winNum();
		}

		if (currentIndex == simonArray.length) {
			currentIndex = 0;
			setTimeout(function() {
				playSimonSeq();
			}, 1000);
		}
	}

	// displaying scores in middle panel

	function roundNum() {
		roundCount = simonArray.length;
		$('#round').html(roundCount);
	}

	function winNum() {
		$('#simonScore').html(simonWinCount);
		localStorage.simonWinCount = simonWinCount;
	}

	function highScore() {
		if (roundCount > highScoreCount) {
			highScoreCount = roundCount - 1;
			$('#highScore').text(highScoreCount);
		}
	}

	// Adding click listeners for quadrants
	
	uprLft.on('click', function() {
		lightItUp($(this).data('id'));
		compareValue(this);
	});

	uprRgt.on('click', function() {
		lightItUp($(this).data('id'));
		compareValue(this);
	});

	lwrRgt.on('click', function() {
		lightItUp($(this).data('id'));
		compareValue(this);
	});

	lwrLft.on('click', function() {
		lightItUp($(this).data('id'));
		compareValue(this);
	});

	// code to toggle Start Game and Reset buttons 

	function onStartClick() {
		playSimonSeq();
		$(this).text("Reset");
		$(this).off('click');
		$(this).click(onResetClick);
	}

	function onResetClick() {
		currentIndex = 0;
		simonArray = [];
		highScoreCount = 0;
		$('#highScore').text(highScoreCount);
		winNum();
		$(this).text("Start Game");
		$(this).off('click');
		$(this).click(onStartClick);
	}

	$('#startGame').on('click', onStartClick);

	// speeding up the game

	if (simonArray.length >= 5) {
		sequenceInterval - 100;
		clickInterval - 50;
	}

	if (simonArray.length >= 10) {
		sequenceInterval - 100;
		clickInterval - 50;
	}

	if (simonArray.length >= 15) {
		sequenceInterval - 100;
		clickInterval - 50;
	}

	//checking and display previous Simon wins on page load

	// if (typeof localStorage.simonWinCount !== 'undefined') {
	// 	simonWinCount = localStorage.simonWinCount;
	// } else {
	// 	localStorage.simonWinCount = 0;
	// }

	// simonWinCount = localStorage.simonWinCount;

	// $('#simonScore').text(simonWinCount);

	// var userIndex = 0;
	// var konamiCode = ['38','38','40','40','37','39','37','39','66','65','13'];

//         	$(document).keydown(function(event) {
//              var currentKeyCode = event.keyCode;
//              if (currentKeyCode == konamiCode[currentIndex]) {
//                  userIndex++;
//              } else {
//                  userIndex = 0;
//              }
//              if (userIndex == konamiCode.length) {
//                  userIndex = 0;
//                  simonWinCount = 0;
//              }
    // });

// Closing my IFFE statement

}());