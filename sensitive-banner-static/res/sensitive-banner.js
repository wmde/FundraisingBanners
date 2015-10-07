var isOpen = false;
var paySEPA = true;
var addressType = 'private';

$( function() {
	var paymentButtons = $( '#WMDE_FR2015_Banner-payment button' );

	paymentButtons.on( 'click', function( e ) {
		e.preventDefault();
		toggleFullForm();
	} );

	$( '#WMDE_FR2015_Banner-form-next' ).on( 'click', function( e ) {
		e.preventDefault();
		debitNextStep();
	} );

	$( '#WMDE_FR2015_Banner-form-finish' ).on( 'click', function( e ) {
		e.preventDefault();
		$( '#WMDE_FR2015_Banner-form-step2' ).slideToggle( 400, function() {
			$( '#WMDE_FR2015_Banner-form-step1' ).slideToggle();
		} );
		toggleFullForm();
	} );

	$( '#WMDE_FR2015_Banner-form-close' ).on( 'click', function() {
		toggleFullForm();
	} );
	paymentButtons.hover( function() {
			$( '#WMDE_FR2015_Banner-arrow' ).show();
		},
		function() {
			$( '#WMDE_FR2015_Banner-arrow' ).hide();
		} );

	$( 'input[name=\'debit-type\']' ).on( 'click', function() {
		toggleDebitType();
	} );

	$( '#address-type-1' ).on( 'click', function() {
		$( '#WMDE_FR2015_Banner-company' ).slideUp();
		$( '#WMDE_FR2015_Banner-person' ).slideDown();
		$( '#WMDE_FR2015_Banner-address' ).slideDown();
		addressType = 'private';
	} );

	$( '#address-type-2' ).on( 'click', function() {
		$( '#WMDE_FR2015_Banner-person' ).slideUp();
		$( '#WMDE_FR2015_Banner-company' ).slideDown();
		$( '#WMDE_FR2015_Banner-address' ).slideDown();
		addressType = 'company';
	} );

	$( '#address-type-3' ).on( 'click', function() {
		$( '#WMDE_FR2015_Banner-company' ).slideUp();
		$( '#WMDE_FR2015_Banner-person' ).slideUp();
		$( '#WMDE_FR2015_Banner-address' ).slideUp();
		addressType = 'anonymous';
	} );
} );

function toggleFullForm() {
	$( '#WMDE_FR2015_Banner-form-details' ).slideToggle( 'slow' );
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

function toggleDebitType() {
	$( '#WMDE_FR2015_Banner-sepa' ).slideToggle();
	$( '#WMDE_FR2015_Banner-nosepa' ).slideToggle();

	paySEPA = !paySEPA;
}

function debitNextStep() {
	$( '#WMDE_FR2015_Banner-form-step1' ).slideToggle( 400, function() {
		$( '#WMDE_FR2015_Banner-form-step2' ).slideToggle();
	} );
	$( "html, body" ).animate( {
		scrollTop: 0
	}, "slow" );
}