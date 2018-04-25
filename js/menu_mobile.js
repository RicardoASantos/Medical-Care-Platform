jQuery(document).ready(function ($) {


	$('#hamburguer').click(function(){

		if ( $('#menu_mobile').css('margin-right') === '0px' ){

			$('#menu_mobile').animate({marginRight:'-70vw'}, 400);

		} else {

			$('#menu_mobile').animate({marginRight:'0vw'}, 400);

		}

	});

});
