jQuery(document).ready(function ($) {

	$('#nav_sec_sobre').click(function(){
		var sobre_top = $('#sobre').offset().top;
		$('html, body').animate({scrollTop:sobre_top},1000);
	});
	
	$('#nav_sec_para_quem').click(function(){
		var sobre_top = $('#para_quem').offset().top;
		$('html, body').animate({scrollTop:sobre_top},1000);
	});	

	$('#nav_sec_vantagens').click(function(){
		var sobre_top = $('#vantagens').offset().top;
		$('html, body').animate({scrollTop:sobre_top},1000);
	});	
	
	$('#nav_sec_como_aderir').click(function(){
		var sobre_top = $('#como_aderir').offset().top;
		$('html, body').animate({scrollTop:sobre_top},1000);
	});	
	
	$('#nav_sec_como_utilizar').click(function(){
		var sobre_top = $('#como_utilizar').offset().top;
		$('html, body').animate({scrollTop:sobre_top},1000);
	});	
	
	$('#nav_sec_valores').click(function(){
		var sobre_top = $('#valores').offset().top;
		$('html, body').animate({scrollTop:sobre_top},1000);
	});	
	
	$('#nav_sec_formas_pagamento').click(function(){
		var sobre_top = $('#formas_pagamento').offset().top;
		$('html, body').animate({scrollTop:sobre_top},1000);
	});		

});
