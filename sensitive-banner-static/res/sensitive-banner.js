var isOpen = false;

$( function() {
	$( '#WMDE_FR2015_Banner-payment button' ).on( 'click', function( e ) {
		e.preventDefault();
		toggleFullForm();
	} );
	$( '#WMDE_FR2015_Banner-payment button' ).hover( function() {
			$( '#WMDE_FR2015_Banner-arrow' ).show();
		},
		function() {
			$( '#WMDE_FR2015_Banner-arrow' ).hide();
		} );

} );

function toggleFullForm() {
	$( '.WMDE_FR2015_Banner-form-details' ).toggle();

	if ( isOpen ) {
		$( '#WMDE_FR2015_Banner' ).css( 'position', 'fixed' );
	} else {
		$( '#WMDE_FR2015_Banner' ).css( 'position', 'absolute' );
		$( "html, body" ).animate( {
			scrollTop: 0
		}, "slow" );
	}

	isOpen = !isOpen;
}