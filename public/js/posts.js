$(document).ready(function(){
	var $link = $('.post-view');
	$link.on('click', function(e){
		e.preventDefault();
		$id = $(this).data('id');
		$('#post-index').slideUp(500, function(){
			$.get('/posts/' + $id, function(html){
				$('#post-show').html(html);
				$('#post-show').slideDown(200);
			});
		});
	});

	$('#post-show').on('click', '#post-back', function(e){
		e.preventDefault();
		$('#post-show').slideUp(500, function(){
			$('#post-index').slideDown(500)
		})
	});

});