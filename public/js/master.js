$('#nav-button').click( function(){
  $(this).toggleClass('width');
  $(this).parent().toggleClass('show');
  $(this).children().toggleClass( 'fa-navicon').toggleClass( 'fa-close');
  $('#nav-list').toggleClass('nav-show'); $('#cover').toggleClass('display'); 
});