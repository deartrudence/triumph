/**
 * Customize Contact Form 7
 *
 */

( function( $ ) {

	$('.your-name, .your-email').parent('p').wrapAll('<div class="row"></div>')
	$('.your-subject, .your-message').parent('p').wrapAll('<div class="row"></div>')


} )( jQuery );