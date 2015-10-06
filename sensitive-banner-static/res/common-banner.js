var finalDateTime = new Date( 2015, 0, 1, 5, 0, 0 );
var goalSum = 8200000;

function getDaysLeft() {
	var daysLeft = Math.floor( new Date( finalDateTime - new Date() ) / 1000 / 60 / 60 / 24 );
	return ( daysLeft < 0 ) ? 0 : daysLeft;
}

function getDaysRemaining() {
	var daysRemaining = getDaysLeft();
	// TODO manually hack to fix older banners from 2014
	if( daysRemaining === 0 ) {
		$('#donationRemaining').width( 0 );
		$('#donationRemaining' ).html( '' );
	}
	return ( daysRemaining != 1 ) ? daysRemaining + " Tage" : "1 Tag";
}

function getSecsPassed() {
	var startDate = "{{{donations-date-base}}}".split( '-' );
	var startDateObj = new Date( startDate[0], startDate[1] - 1, startDate[2] );

	var maxSecs =  Math.floor( new Date( finalDateTime - startDateObj ) / 1000 );

	var secsPassed = Math.floor( (new Date() - startDateObj) / 1000 );
	if ( secsPassed < 0 ) secsPassed = 0;
	if ( secsPassed > maxSecs ) secsPassed = maxSecs;

	return secsPassed;
}

function getApprDonationsRaw( rand ) {
	var startDonations = parseInt( "{{{donations-collected-base}}}" );
	var secsPast = getSecsPassed();

	//TODO manually hack to fix older banners from 2014
	//return startDonations + getApprDonationsFor( secsPast, rand );
	return 8300000;
}

function getApprDonatorsRaw( rand ) {
	var startDonators = parseInt( "{{{donators-base}}}" );

	var secsPast = getSecsPassed();

	return startDonators + getApprDonatorsFor( secsPast, rand );
}

function getApprDonationsFor( secsPast, rand ) {
	var apprDontionsMinute = parseFloat( "{{{appr-donations-per-minute}}}" );
	var randFactor = 0;

	if ( rand === true ) {
		randFactor = Math.floor( (Math.random()) + 0.5 - 0.2 );
	}

	return (secsPast / 60 * (apprDontionsMinute * (100 + randFactor)) / 100);
}

function getApprDonatorsFor( secsPast, rand ) {
	var apprDonatorsMinute = parseFloat( "{{{appr-donators-per-minute}}}" );
	var randFactor = 0;

	if ( rand === true ) {
		randFactor = Math.floor( (Math.random()) + 0.5 - 0.2 );
	}

	return (secsPast / 60 * (apprDonatorsMinute * (100 + randFactor)) / 100);
}

function getCurrentGermanDay() {
	switch ( new Date().getDay() ) {
		case 0:
			return "Sonntag";
		case 1:
			return "Montag";
		case 2:
			return "Dienstag";
		case 3:
			return "Mittwoch";
		case 4:
			return "Donnerstag";
		case 5:
			return "Freitag";
		case 6:
			return "Samstag";
		default:
			return "";
	}
}

function addPointsToNum( num ) {
	num = parseInt( num ) + "";
	num = num.replace( /\./g, ',' );
	return num.replace( /(\d)(?=(\d\d\d)+(?!\d))/g, "$1." );
}

function floorF( num ) {
	return Math.floor(num * 100) / 100;
}

function increaseImpCount() {
	impCount = parseInt($.cookie('centralnotice_banner_impression_count')) | 0;
	$.cookie('centralnotice_banner_impression_count', impCount + 1, { expires: 7, path: '/' });
	return impCount + 1;
}

function increaseBannerImpCount( bannerId ) {
	var impCount = 0;

	if($.cookie('centralnotice_single_banner_impression_count')) {
		var impCountCookie = $.cookie('centralnotice_single_banner_impression_count');
		var bannerImpCount = impCountCookie.split("|");
		if(bannerImpCount[0] === bannerId) {
			impCount = parseInt(bannerImpCount[1]);
		}
	}
	$.cookie('centralnotice_single_banner_impression_count', bannerId + '|' + (impCount + 1), { expires: 7, path: '/' });
	return (impCount + 1);
}

function validateForm() {
	var chkdPayment = $( 'input[name=pay]:checked', '#WMDE_FR2015_Banner-form' ).val();
	switch( chkdPayment ) {
		case "BEZ":
			$( '#form-page' ).val( 'Formularseite2-Lastschrift' );
			break;
		case "UEB":
			$( '#form-page' ).val( 'Formularseite2-Überweisung' );
			break;
		case "PPL":
			$( '#form-page' ).val( 'Formularseite2-PayPal' );
			break;
		case "MCP":
			$( '#form-page' ).val( 'Formularseite2-Micropayment' );
			break;
	}
	var form = document.donationForm;
	var error = false;

	if($('#interval_multiple').attr('checked') === 'checked') {
		if($('input[name=interval]:checked', form).length !== 1) {
			alert("Es wurde kein Zahlungsintervall ausgewählt.");
			return false;
		} else {
			$('#intervalType').val( "1" );
			$('#periode').val($('input[name=interval]:checked', form).val());
		}
	} else {
		$('#periode').val("0");
	}

	// Get amount selection
	var amount = null;
	for ( var i = 0; i < form.betrag_auswahl.length; i++ ) {
		if ( form.betrag_auswahl[i].checked ) {
			amount = form.betrag_auswahl[i].value;
			break;
		}
	}
	if ( form.amountGiven.value !== "" ) {
		var otherAmount = form.amountGiven.value;
		otherAmount = otherAmount.replace(/[,.](\d)$/, '\:$10');
		otherAmount = otherAmount.replace(/[,.](\d)(\d)$/, '\:$1$2');
		otherAmount = otherAmount.replace(/[\$,.]/g, '');
		otherAmount = otherAmount.replace(/:/, '.');
		form.amountGiven.value = otherAmount;
		amount = otherAmount;
		$('#input_amount_other').val( otherAmount );
	}
	// Check amount is a real number
	error = ( amount === null || isNaN( amount ) || amount.value <= 0 );
	// Check amount is at least the minimum
	if ( amount < 1 || error ) {
		alert( 'Der Mindestbetrag beträgt 1 Euro.');
		return false;
	} else if ( amount > 99999 ) {
		alert( 'Der Spendenbetrag ist zu hoch.' );
		return false;
	}
	return !error;
}
