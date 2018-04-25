jQuery(document).ready(function ($) {


    $('#banner').slick({
      slidesToShow: 1  ,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 6000,
    });
	
	if ($(window).width() < 850) {

		$('#container').slick({
		  slidesToShow: 3  ,
		  slidesToScroll: 1,
		  autoplay: true,
		  autoplaySpeed: 1000,
		});	

	}
	else {
	    $('#container').slick({
		  slidesToShow: 5  ,
		  slidesToScroll: 1,
		  autoplay: true,
		  autoplaySpeed: 1000,
		});
	}
	



});
