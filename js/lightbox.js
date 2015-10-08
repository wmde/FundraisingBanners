$( document ).ready( function () {
	$( '.list-item-title' ).on( 'click', function () {
		$( this ).toggleClass( 'opened' );
		$( this ).next().toggle();
	} );

	$( '.banner-lightbox-close' ).on( 'click', function () {
		$( this ).parent().slideToggle();
	} );
} );
