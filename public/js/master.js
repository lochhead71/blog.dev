'use strict';

$(document).ready(function() {

	// animation for alerts

	setTimeout(function(){
		$(".alert").slideUp(900);
	}, 1000);

	// sliding panels for navigation

	$('#hdln-aboutMe').click(function() {
		$('#hdln-aboutMe').slideUp();
		$('#body-aboutMe').slideDown();
		$('#body-resume').slideUp();
		$('#body-portfolio').slideUp();
		$('#post-index').slideUp();
		$('#body-contact').slideUp();
	});
	$('#hdln-resume').click(function() {
		$('#hdln-aboutMe').slideDown();
		$('#body-aboutMe').slideUp();
		$('#body-resume').slideDown();
		$('#body-portfolio').slideUp();
		$('#post-index').slideUp();
		$('#body-contact').slideUp();
	});
	$('#hdln-portfolio').click(function() {
		$('#hdln-aboutMe').slideDown();
		$('#body-aboutMe').slideUp();
		$('#body-resume').slideUp();
		$('#body-portfolio').slideDown();
		$('#post-index').slideUp();
		$('#body-contact').slideUp();
	});
	$('#hdln-blog').click(function() {
		$('#hdln-aboutMe').slideDown();
		$('#body-aboutMe').slideUp();
		$('#body-resume').slideUp();
		$('#body-portfolio').slideUp();
		$('#post-index').slideDown();
		$('#body-contact').slideUp();
	});
	$('#hdln-contact').click(function() {
		$('#hdln-aboutMe').slideDown();
		$('#body-aboutMe').slideUp();
		$('#body-resume').slideUp();
		$('#body-portfolio').slideUp();
		$('#post-index').slideUp();
		$('#body-contact').slideDown();
	});

	// call for carousel auto animation

	$('.carousel').carousel();

	// redirect to blog index after save and validate

	$()


		$('#hdln-blog').click(function() {
		$('#hdln-aboutMe').slideDown();
		$('#body-aboutMe').slideUp();
		$('#body-resume').slideUp();
		$('#body-portfolio').slideUp();
		$('#post-index').slideDown();
		$('#body-contact').slideUp();
	});

}());
