$(document).ready(function(){
	var $link = $('.post-view');
	$link.on('click', function(e){
		e.preventDefault();

		$('#post-index').slideUp(500, function(){
			$.get('/posts/' + $link.data('id'), function(html){
				$('#post-show').html(html);
				$('#post-show').slideDown(200);
			});
		});
	});

	$('#post-show').on('click', '#post-back', function(e){console.log($('#post-back').get(0));
		e.preventDefault();
		$('#post-show').slideUp(500, function(){
			$('#post-index').slideDown(500)
		})
	});

});