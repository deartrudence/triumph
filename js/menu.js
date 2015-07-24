/**
 * Activate menu links as scroll by
 *
 */

( function( $ ) {

	$(window).scroll(function(){

		var scrollAmount = $(this).scrollTop();

    	console.log("scrollAmount " + scrollAmount )
		if(scrollAmount >= ($('#home').offset().top - 10)){
			console.log("home")
			$('#site-navigation a').removeClass('active')
    		$('#site-navigation a:eq(0)').addClass('active');
		};

		if(scrollAmount >= ($('#about').position().top - 10)){
			console.log("about")
			$('#site-navigation a').removeClass('active')
    		$('#site-navigation a:eq(1)').addClass('active');
		};

		if(scrollAmount >= ($('#services').position().top - 10)){
			console.log("services")
			$('#site-navigation a').removeClass('active')
    		$('#site-navigation a:eq(2)').addClass('active');
		};

		if(scrollAmount >= ($('#contact').position().top - 10)){
			console.log("contact")
			$('#site-navigation a').removeClass('active')
    		$('#site-navigation a:eq(3)').addClass('active');
		};

		if(scrollAmount >= ($('#quote').position().top - 10)){
			console.log("quote")
			$('#site-navigation a').removeClass('active')
    		$('#site-navigation a:eq(4)').addClass('active');
		};
		
	});

} )( jQuery );