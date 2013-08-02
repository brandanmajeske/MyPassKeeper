$(document).ready(function(){
	
	$('td.passwd').each(function( index ){
		var original = $(this).html();
		$(this).html('*****************');
		$(this).hover(function(){
			$(this).html(original);
		}, function(){
			$(this).html('*****************');
		});
	});
});