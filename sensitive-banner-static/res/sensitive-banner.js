var isOpen = false;
var paySEPA = true;
var addressType = 'private';

$( function() {
	var paymentButtons = $( '#WMDE_BannerFullForm-payment button' );

	paymentButtons.on( 'click', function( e ) {
		e.preventDefault();
		toggleFullForm();
	} );

	$( '#WMDE_BannerForm-next' ).on( 'click', function( e ) {
		e.preventDefault();
		debitNextStep();
	} );

	$( '#WMDE_BannerFullForm-finish' ).on( 'click', function( e ) {
		e.preventDefault();
		$( '#WMDE_BannerFullForm-step2' ).slideToggle( 400, function() {
			$( '#WMDE_BannerFullForm-step1' ).slideToggle();
		} );
		toggleFullForm();
	} );

	$( '#WMDE_BannerFullForm-close-step1' ).on( 'click', function() {
		toggleFullForm();
	} );
	$( '#WMDE_BannerFullForm-close-step2' ).on( 'click', function() {
		$( '#WMDE_BannerFullForm-step2' ).slideToggle( 400, function() {
			$( '#WMDE_BannerFullForm-step1' ).slideToggle();
		} );
		toggleFullForm();
	} );


	paymentButtons.hover( function() {
			if ( !isOpen ) $( '#WMDE_BannerFullForm-arrow' ).show();
		},
		function() {
			$( '#WMDE_BannerFullForm-arrow' ).hide();
		} );

	$( 'input[name=\'debit-type\']' ).on( 'click', function() {
		toggleDebitType();
	} );

	$( '#address-type-1' ).on( 'click', function() {
		$( '#WMDE_BannerFullForm-company' ).slideUp();
		$( '#WMDE_Banner-person' ).slideDown();
		$( '#WMDE_Banner-address' ).slideDown();
		addressType = 'private';
	} );

	$( '#address-type-2' ).on( 'click', function() {
		$( '#WMDE_Banner-person' ).slideUp();
		$( '#WMDE_BannerFullForm-company' ).slideDown();
		$( '#WMDE_Banner-address' ).slideDown();
		addressType = 'company';
	} );

	$( '#address-type-3' ).on( 'click', function() {
		$( '#WMDE_BannerFullForm-company' ).slideUp();
		$( '#WMDE_Banner-person' ).slideUp();
		$( '#WMDE_Banner-address' ).slideUp();
		addressType = 'anonymous';
	} );
} );

function toggleFullForm() {
	$( '#WMDE_BannerFullForm-details' ).slideToggle( 'slow' );
	$( '#WMDE_BannerFullForm-info' ).slideToggle( 'slow' );

	if ( isOpen ) {
		$( '#WMDE_Banner' ).css( 'position', 'fixed' );
		$( '#WMDE_BannerFullForm-arrow' ).show();
	} else {
		$( '#WMDE_Banner' ).css( 'position', 'absolute' );
		$( '#WMDE_BannerFullForm-arrow' ).hide();
		$( "html, body" ).animate( {
			scrollTop: 0
		}, "slow" );
	}
	isOpen = !isOpen;
}

function toggleDebitType() {
	$( '#WMDE_Banner-sepa' ).slideToggle();
	$( '#WMDE_BannerFullForm-nosepa' ).slideToggle();

	paySEPA = !paySEPA;
}

function debitNextStep() {
	$( '#WMDE_BannerFullForm-step1' ).slideToggle( 400, function() {
		$( '#WMDE_BannerFullForm-step2' ).slideToggle();
	} );
	$( "html, body" ).animate( {
		scrollTop: 0
	}, "slow" );
}

function toggleFundsBox() {
	if ( $( '#WMDE_BannerFullForm-funds-link' ).hasClass( 'opened' ) ) {
		hideFundsBox();
	} else {
		showFundsBox();
	}
}

function toggleBitCoinBox() {
	if ( $( '#WMDE_BannerFullForm-bitcoin-link' ).hasClass( 'opened' ) ) {
		hideBitCoinBox();
	} else {
		showBitCoinBox();
	}
}

function toggleTaxBox() {
	if ( $( '#WMDE_BannerFullForm-taxes-link' ).hasClass( 'opened' ) ) {
		hideTaxBox();
	} else {
		showTaxBox();
	}
}

function showFundsBox() {
	hideBitCoinBox( function() {
		hideTaxBox( function() {
			$( '#WMDE_BannerFullForm-info' ).addClass( 'funds' );
			$( '#WMDE_BannerFullForm-funds' ).slideDown();
		} );
	} );
}

function showBitCoinBox() {
	hideFundsBox( function() {
		hideTaxBox( function() {
			$( '#WMDE_BannerFullForm-bitcoin' ).slideDown();
		} );
	} );
}

function showTaxBox() {
	hideFundsBox( function() {
		hideBitCoinBox( function() {
			$( '#WMDE_BannerFullForm-info' ).addClass( 'taxes' );
			$( '#WMDE_BannerFullForm-taxes' ).slideDown();
		} );
	} );
}

function hideFundsBox( whenDone ) {
	$( '#WMDE_BannerFullForm-funds' ).slideUp( 400, function() {
		$( '#WMDE_BannerFullForm-info' ).removeClass( 'funds' );
		$( '#WMDE_BannerFullForm-funds-link' ).removeClass( 'opened' );
		if ( $.isFunction( whenDone ) ) {
			whenDone();
		}
	} );

}

function hideBitCoinBox( whenDone ) {
	$( '#WMDE_BannerFullForm-bitcoin' ).slideUp( 400, function() {
		$( '#WMDE_BannerFullForm-bitcoin-link' ).removeClass( 'opened' );
		if ( $.isFunction( whenDone ) ) {

			whenDone();
		}

	} );
}

function hideTaxBox( whenDone ) {

	$( '#WMDE_BannerFullForm-taxes' ).slideUp( 400, function() {
		$( '#WMDE_BannerFullForm-info' ).removeClass( 'taxes' );
		$( '#WMDE_BannerFullForm-taxes-link' ).removeClass( 'opened' );
		if ( $.isFunction( whenDone ) ) {
			whenDone();
		}
	} );

}

