/**
 * Activate menu links as scroll by
 *
 */

( function( $ ) {

	$(window).scroll(function(){

		var scrollAmount = $(this).scrollTop();

    	// console.log("scrollAmount " + scrollAmount )
		if(scrollAmount >= ($('#home').offset().top - 10)){
			$('#site-navigation a').removeClass('active')
    		$('#site-navigation a:eq(0)').addClass('active');
		};

		if(scrollAmount >= ($('#about').position().top - 10)){
			$('#site-navigation a').removeClass('active')
    		$('#site-navigation a:eq(1)').addClass('active');
		};

		if(scrollAmount >= ($('#services').position().top - 10)){
			$('#site-navigation a').removeClass('active')
    		$('#site-navigation a:eq(2)').addClass('active');
		};

		if(scrollAmount >= ($('#contact').position().top - 10)){
			$('#site-navigation a').removeClass('active')
    		$('#site-navigation a:eq(3)').addClass('active');
		};

		if(scrollAmount >= ($('#quote').position().top - 10)){
			$('#site-navigation a').removeClass('active')
			$('#site-navigation a').removeClass(':focus')
    		$('#site-navigation a:eq(4)').addClass('active');
		};
		
	});

	$('.menu-toggle').click(function(){
		$('.site-header__navigation ul li').toggleClass('hidden');
	});


	if($(window).width() >= 960){
		$('.site-header__navigation ul').addClass('hidden');
		console.log($(window).width())
		console.log("whatthefuck")
	};



} )( jQuery );