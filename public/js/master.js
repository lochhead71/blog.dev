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
		$('#body-blog').slideUp();
		$('#body-contact').slideUp();
	});
	$('#hdln-resume').click(function() {
		$('#hdln-aboutMe').slideDown();
		$('#body-aboutMe').slideUp();
		$('#body-resume').slideDown();
		$('#body-portfolio').slideUp();
		$('#body-blog').slideUp();
		$('#body-contact').slideUp();
	});
	$('#hdln-portfolio').click(function() {
		$('#hdln-aboutMe').slideDown();
		$('#body-aboutMe').slideUp();
		$('#body-resume').slideUp();
		$('#body-portfolio').slideDown();
		$('#body-blog').slideUp();
		$('#body-contact').slideUp();
	});
	$('#hdln-blog').click(function() {
		$('#hdln-aboutMe').slideDown();
		$('#body-aboutMe').slideUp();
		$('#body-resume').slideUp();
		$('#body-portfolio').slideUp();
		$('#body-blog').slideDown();
		$('#body-contact').slideup();
	});
	$('#hdln-contact').click(function() {
		$('#hdln-aboutMe').slideDown();
		$('#body-aboutMe').slideUp();
		$('#body-resume').slideUp();
		$('#body-portfolio').slideUp();
		$('#body-blog').slideUp();
		$('#body-contact').slideDown();
	});

	// call for carousel auto animation

	$('.carousel').carousel();

}());
