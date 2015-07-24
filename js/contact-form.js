/**
 * Customize Contact Form 7
 *
 */

( function( $ ) {

	//add grid classes for styling
	$('.your-name, .your-email').parent('p').wrapAll('<div class="row"></div>');
	$('.your-subject, .services-dropdown').parent('p').wrapAll('<div class="row"></div>');
	$('.your-name, .your-email, .your-subject, .services-dropdown').parent('p').addClass('col-half');



} )( jQuery );