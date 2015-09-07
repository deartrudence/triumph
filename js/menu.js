/**
 * Activate menu links as scroll by
 *
 */

( function( $ ) {

	$(window).scroll(function(){

		var scrollAmount = $(this).scrollTop();

    	// console.log("scrollAmount " + scrollAmount )
		if(scrollAmount >= ($('#home').offset().top - 5)){
			$('#site-navigation a').removeClass('active')
			$('#site-navigation a').blur();
    		$('#site-navigation a:eq(1)').addClass('active');
		};

		if(scrollAmount >= ($('#about').position().top - 5)){
			$('#site-navigation a').removeClass('active')
			$('#site-navigation a').blur();
    		$('#site-navigation a:eq(2)').addClass('active');
		};

		if(scrollAmount >= ($('#services').position().top - 5)){
			$('#site-navigation a').removeClass('active')
			$('#site-navigation a').blur();
    		$('#site-navigation a:eq(3)').addClass('active');
		};

		if(scrollAmount >= ($('#contact').position().top - 5)){
			$('#site-navigation a').removeClass('active')
			$('#site-navigation a').blur();
    		$('#site-navigation a:eq(4)').addClass('active');
		};

		if(scrollAmount >= ($('#quote').position().top - 5)){
			$('#site-navigation a').removeClass('active')
			$('#site-navigation a').blur();
    		$('#site-navigation a:eq(5)').addClass('active');
		};
		
	});

	$('.menu-toggle').click(function(){
		$('.site-header__navigation ul li').toggleClass('hidden');
	});


	if($(window).width() <= 959){
		$('.site-header__navigation ul li').addClass('hidden');
	};



} )( jQuery );