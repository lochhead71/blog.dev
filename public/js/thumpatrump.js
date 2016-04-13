"use strict";

(function(){

// declare global variables

var boxes = [];
var animationTime = 2000;
var intervalTime = 1500;
var timerCount = 30;
var bodyCount = 0;
var highScore = 0;
var launchedTrumps = 0;

// build component functions

function loadBoxesInArray() {
	$('.box').each(function(){
		boxes.push($(this));
	});
}

function pickRndmLctn() {
	return boxes[Math.floor(Math.random() * boxes.length)];
}

function enterTrump() {
	var randomLocation = pickRndmLctn();
	$(randomLocation).html('<img src="/img/trumpMole.png" class="trumpMole">');
	$(randomLocation).children().animate({
	    opacity: "1",
	    height: "175px"
	}, animationTime);
	$(randomLocation).addClass("targetBox");
	return randomLocation;
}

function exitTrump(target) {
	$(target).children().animate({
	    opacity: "0"
	}, 500, function() {
		$(target).removeClass("targetBox");
	});
	launchedTrumps++;
}

function startTimer() {
	var intervalId = setInterval(function(){
		if (timerCount <= 0) {
		clearInterval(intervalId);
		}
		$("#timer").text(timerCount);
		timerCount--;
	}, 1000);
}

function logHighScore() {
	if (highScore < bodyCount) {
		highScore = bodyCount;
	}
}

function makeItHarder() {
	if (bodyCount % 5 == 0) {
		animationTime - 500;
		intervalTime - 500;
	}
}

// build sequence functions

function initSequence() {
	var trumpExit = enterTrump();
	setTimeout(function() {
		exitTrump(trumpExit);
	}, intervalTime);
}

// build event listeners

$('#startGame').click(function(){
	startTimer();
	var intervalId = setInterval(function(){
		if (timerCount <= 0) {
			clearInterval(intervalId);
			var escTrumps = launchedTrumps - bodyCount;
			$("#escTrumps").text(escTrumps);
		}
		initSequence();
	}, intervalTime);
	$(this).hide();
	$('#reset').show();
});

$('#reset').click(function(){
	logHighScore();
	$("#highScore").html(highScore);
	timerCount = 30;
	$("#timer").html(timerCount);
	bodyCount = 0;
	$("#bodyCount").text(bodyCount);
	$(this).hide();
	$("#startGame").show();
});

$('.container').on('click', '.targetBox', function() {
	$(this).removeClass("targetBox");
	$(this).html('');
	$(this).html('<img src="/img/thumpedMole.png" alt="Thwacked!">');
	$(this).children().animate({
		opacity: "0"
	}, 500);
	bodyCount++;
	$("#bodyCount").text(bodyCount);
	makeItHarder();
});

// execute commands on page load

loadBoxesInArray();
$('#reset').hide();

// close IFFE statement
}());