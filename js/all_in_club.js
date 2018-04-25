jQuery(document).ready(function ($) {

	$('#nav_sec_sobre').click(function(){
		
		var sobre_top = $('#sobre').offset().top;
		
		$('html, body').animate({scrollTop:sobre_top},1000);
		
	});

	$('#nav_sec_parceiros').click(function(){
		
		var sobre_top = $('#parceiros').offset().top;
		
		$('html, body').animate({scrollTop:sobre_top},1000);
		
	});
	
	
	$('#nav_sec_como_utilizar').click(function(){
		
		var sobre_top = $('#como_utilizar').offset().top;
		
		$('html, body').animate({scrollTop:sobre_top},1000);
		
	});	


});
