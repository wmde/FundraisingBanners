/*jshint latedef: nofunc */
/*jshint unused: false */
/* globals mw, alert, GlobalBannerSettings */
var currentDate = new Date(),
	finalDateTime = new Date( 2015, 11, 31, 23, 59, 59 ),
	goalSum = 8600000,
	/* jshint -W079 */
	GlobalBannerSettings = typeof GlobalBannerSettings !== 'undefined' ? GlobalBannerSettings : {},
	/* jshint +W079 */
	baseDate = replaceWikiVars( '{{{donations-date-base}}}' ),
	collectedBase = parseInt( replaceWikiVars( '{{{donations-collected-base}}}' ), 10 ),
	donorsBase = parseInt( replaceWikiVars( '{{{donators-base}}}' ), 10 ),
	donationsPerMinApproximation = parseFloat( replaceWikiVars( '{{{appr-donations-per-minute}}}' ) ),
	donorsPerMinApproximation = parseFloat( replaceWikiVars( '{{{appr-donators-per-minute}}}' ) ),
	noIntervalSelectedMessage = replaceWikiVars( '{{{no-interval-message}}}' ) || 'Bitte wählen Sie ein Zahlungsintervall.',
	amountTooLowMessage = replaceWikiVars( '{{{amount-too-low-message}}}' ) || 'Der Mindestbetrag beträgt 1 Euro.',
	amountTooHighMessage = replaceWikiVars( '{{{amount-too-high-message}}}' ) || 'Der Spendenbetrag ist zu hoch.',
	allBannersImpCookie = 'centralnotice_banner_impression_count',
	singleBannerImpCookie = 'centralnotice_single_banner_impression_count',
	bannerCloseTrackRatio = replaceWikiVars( '{{{banner-close-track-ratio}}}' ) || 0.01,
	bannerClosedCookie = replaceWikiVars( '{{{banner-closed-cookie}}}' ),
	bannerClosedCookieExpiryDate = parseDateString( replaceWikiVars( '{{{banner-closed-cookie-expiry-date}}}' ) ) || new Date( currentDate.getFullYear() + 1, 0, 1 ),
	bannerClosedCookieValue = replaceWikiVars( '{{{banner-closed-cookie-custom-value}}}' ) || '1',
	showBanner = true,
	messages = {
		en: {
			day: 'day',
			days: 'days'
		},
		de: {
			day: 'Tag',
			days: 'Tage'
		}
	};

if ( bannerClosedCookieIsSet() ) {
	showBanner = false;
}

if ( onMediaWiki() ) {
	mw.centralNotice.bannerData.alterImpressionData = function ( impressionData ) {
		if ( showBanner ) {
			return true;
		}

		mw.centralNotice.bannerData.hideResult = true;
		mw.centralNotice.bannerData.hideReason = 'close';
		return false;
	};
}

$( function () {
	$( '#WMDE_Banner-close' ).click( function () {
		if ( Math.random() < bannerCloseTrackRatio ) {
			$( '#WMDE_Banner-close-ct' ).attr( 'src', replaceWikiVars( 'https://tracking.wikimedia.de/piwik/piwik.php?idsite=1&url=https://spenden.wikimedia.de/banner-closed/{{{BannerName}}}&rec=1' ) );
		}
		$( '#WMDE_Banner' ).hide();
		removeBannerSpace();
		setBannerClosedCookie();

		return false;
	} );

	$( '#amount-other-input' ).on( 'click', function () {
		$( 'input:radio[name=betrag_auswahl]' ).prop( 'checked', false );
		$( '#amount_other' ).prop( 'checked', true );
	} );
	$( '#amount_other' ).on( 'click', function () {
		$( '#amount-other-input' ).trigger( 'click' );
	} );
	$( 'input:radio[name=betrag_auswahl]' ).on( 'click', function () {
		$( '#amount_other' ).prop( 'checked', false );
		$( '#amount-other-input' ).val( '' );
		hideAmountError();
	} );
	$( '#interval_onetime' ).on( 'click', function () {
		removeSpaceForIntervalOptions();
		$( '.interval-options' ).addClass( 'interval-hidden' );
		$( '#interval_multiple' ).prop( 'checked', false );
		hideFrequencyError();
	} );
	$( '#interval_multiple' ).on( 'click', function () {
		addSpaceForIntervalOptions();
		$( '.interval-options' ).removeClass( 'interval-hidden' );
		$( '#interval_onetime' ).prop( 'checked', false );
	} );
	$( 'input:radio[name=interval]' ).on( 'click', function () {
		hideFrequencyError();
	} );
} );

function parseDateString( dateString ) {
	var dateParts = dateString.split( '-' );
	if ( dateParts.length !== 3 ) {
		return false;
	}
	return new Date( dateParts[ 0 ], dateParts[ 1 ] - 1, dateParts[ 2 ] );
}

function setBannerClosedCookie() {
	$.cookie( bannerClosedCookie, bannerClosedCookieValue, { expires: bannerClosedCookieExpiryDate, path: '/' } );
}

function getDaysLeft() {
	var daysLeft = Math.floor( new Date( finalDateTime - new Date() ) / 1000 / 60 / 60 / 24 );
	return ( daysLeft < 0 ) ? 0 : daysLeft;
}

function getDaysRemaining( language ) {
	var daysRemaining = getDaysLeft(),
		lang = language || 'de';
	// TODO manually hack to fix older banners from 2014
	if ( daysRemaining === 0 ) {
		$( '#donationRemaining' ).width( 0 );
		$( '#donationRemaining' ).html( '' );
	}
	return daysRemaining + ' ' + ( daysRemaining > 1 ? messages[ lang ].days : messages[ lang ].day );
}

function getSecsPassed() {
	var startDate = parseDateString( baseDate ),
		maxSecs = Math.floor( new Date( finalDateTime - startDate ) / 1000 ),
		secsPassed = Math.floor( ( new Date() - startDate ) / 1000 );

	if ( secsPassed < 0 ) {
		secsPassed = 0;
	}
	if ( secsPassed > maxSecs ) {
		secsPassed = maxSecs;
	}

	return secsPassed;
}

function getApprDonationsRaw( rand ) {
	var startDonations = collectedBase,
		secsPast = getSecsPassed();

	return startDonations + getApprDonationsFor( secsPast, rand );
}

function getApprDonatorsRaw( rand ) {
	var startDonators = donorsBase,
		secsPast = getSecsPassed();

	return startDonators + getApprDonatorsFor( secsPast, rand );
}

function getApprDonationsFor( secsPast, rand ) {
	var apprDontionsMinute = donationsPerMinApproximation,
		randFactor = 0;

	if ( rand === true ) {
		randFactor = Math.floor( ( Math.random() ) + 0.5 - 0.2 );
	}

	return ( secsPast / 60 * ( apprDontionsMinute * ( 100 + randFactor ) ) / 100 );
}

function getApprDonatorsFor( secsPast, rand ) {
	var apprDonatorsMinute = donorsPerMinApproximation,
		randFactor = 0;

	if ( rand === true ) {
		randFactor = Math.floor( ( Math.random() ) + 0.5 - 0.2 );
	}

	return ( secsPast / 60 * ( apprDonatorsMinute * ( 100 + randFactor ) ) / 100 );
}

function getCurrentGermanDay() {
	switch ( currentDate.getDay() ) {
		case 0:
			return 'Sonntag';
		case 1:
			return 'Montag';
		case 2:
			return 'Dienstag';
		case 3:
			return 'Mittwoch';
		case 4:
			return 'Donnerstag';
		case 5:
			return 'Freitag';
		case 6:
			return 'Samstag';
		default:
			return '';
	}
}

function addPointsToNum( num ) {
	// jscs:disable disallowImplicitTypeConversion
	num = parseInt( num, 10 ) + '';
	// jscs:enable disallowImplicitTypeConversion
	num = num.replace( /\./g, ',' );
	return num.replace( /(\d)(?=(\d\d\d)+(?!\d))/g, '$1.' );
}

function floorF( num ) {
	return Math.floor( num * 100 ) / 100;
}

function getImpCount() {
	return parseInt( $.cookie( allBannersImpCookie ), 10 ) || 0;
}

function getBannerImpCount( bannerId ) {
	var cookieValue, cookieData;

	if ( $.cookie( singleBannerImpCookie ) ) {
		cookieValue = $.cookie( singleBannerImpCookie );
		cookieData = cookieValue.split( '|' );
		if ( cookieData[ 0 ] === bannerId ) {
			return parseInt( cookieData[ 1 ], 10 );
		}
	}
	return 0;
}

function increaseImpCount() {
	var impCount = getImpCount();
	$.cookie( allBannersImpCookie, impCount + 1, { expires: 7, path: '/' } );
	return impCount + 1;
}

function increaseBannerImpCount( bannerId ) {
	var impCount = getBannerImpCount( bannerId );

	$.cookie( singleBannerImpCookie, bannerId + '|' + ( impCount + 1 ), {
		expires: 7,
		path: '/'
	} );
	return ( impCount + 1 );
}

function validateForm() {
	var chkdPayment = $( 'input[name=pay]:checked', '#WMDE_BannerForm' ).val(),
		form = document.donationForm,
		error = false,
		amount;

	switch ( chkdPayment ) {
		case 'BEZ':
			$( '#form-page' ).val( 'Formularseite2-Lastschrift' );
			break;
		case 'UEB':
			$( '#form-page' ).val( 'Formularseite2-Überweisung' );
			break;
		case 'PPL':
			$( '#form-page' ).val( 'Formularseite2-PayPal' );
			break;
		case 'MCP':
			$( '#form-page' ).val( 'Formularseite2-Micropayment' );
			break;
	}

	if ( !validateAndSetPeriod() ) {
		return false;
	}
	amount = getAmount();

	// Check amount is at least the minimum
	if ( amount < 1 || error ) {
		showAmountError( amountTooLowMessage );
		return false;
	} else if ( amount > 99999 ) {
		showAmountError( amountTooHighMessage );
		return false;
	}
	hideAmountError();
	return amount;
}

function showAmountError( text ) {
	if ( $( '#WMDE_Banner-amounts-error-text' ).length < 1 ) {
		alert( text );
		return;
	}
	$( '#WMDE_Banner-amounts-error-text' ).text( text ).show();
	$( '#WMDE_Banner-amounts' ).addClass( 'fieldset-error' );
}

function hideAmountError() {
	$( '#WMDE_Banner-amounts-error-text' ).hide();
	$( '#WMDE_Banner-amounts' ).removeClass( 'fieldset-error' );
}

function showFrequencyError( text ) {
	if ( $( '#WMDE_Banner-frequency-error-text' ).length < 1 ) {
		alert( text );
		return;
	}
	$( '#WMDE_Banner-frequency-error-text' ).text( text ).show();
	$( '#WMDE_Banner-frequency' ).addClass( 'fieldset-error' );
}

function hideFrequencyError() {
	$( '#WMDE_Banner-frequency-error-text' ).hide();
	$( '#WMDE_Banner-frequency' ).removeClass( 'fieldset-error' );
}

/**
 * Check the "interval" radio buttons and change the "period" and "intervalType" fields accordingly.
 * If "periodically" is selected but no interval is selected, this function
 * will display an error message via alert.
 */
function validateAndSetPeriod() {
	var form = document.donationForm;
	if ( $( '#interval_multiple' ).is( ':checked' ) ) {
		if ( $( 'input[name=interval]:checked', form ).length !== 1 ) {
			showFrequencyError( noIntervalSelectedMessage );
			return false;
		} else {
			$( '#intervalType' ).val( '1' );
			$( '#periode' ).val( $( 'input[name=interval]:checked', form ).val() );
		}
	} else if ( $( '#interval_onetime' ).is( ':checked' ) )  {
		$( '#periode' ).val( '0' );
		$( '#intervalType' ).val( '0' );
	} else {
		showFrequencyError( noIntervalSelectedMessage );
		return false;
	}
	hideFrequencyError();
	return true;
}

function getAmount() {
	var amount = null,
		otherAmount = $( '#amount-other-input' ).val(),
		form = document.donationForm;

	amount = $( 'input[name=betrag_auswahl]:checked' ).val();

	if ( otherAmount !== '' ) {
		otherAmount = otherAmount.replace( /[,.](\d)$/, '\:$10' );
		otherAmount = otherAmount.replace( /[,.](\d)(\d)$/, '\:$1$2' );
		otherAmount = otherAmount.replace( /[\$,.]/g, '' );
		otherAmount = otherAmount.replace( /:/, '.' );
		$( '#amount-other-input' ).val( otherAmount );
		amount = otherAmount;
	}

	if ( amount === null || isNaN( amount ) || amount.value <= 0 ) {
		return false;
	}

	return amount;
}

function addBannerSpace() {
	var expandableBannerHeight = $( 'div#WMDE_Banner' ).height() + 44,
		bannerDivElement = $( '#WMDE_Banner' ),
		skin = getSkin();

	if ( !showBanner ) {
		return;
	}
	switch ( skin ) {
		case 'vector':
			bannerDivElement.css( 'top', 0 );
			bannerDivElement.css( 'display', 'block' );
			$( '#mw-panel' ).css( 'top', expandableBannerHeight + 160 );
			$( '#mw-head' ).css( 'top', expandableBannerHeight );
			$( '#mw-page-base' ).css( 'paddingTop', expandableBannerHeight );
			break;
		case 'monobook':
			$( '#globalWrapper' ).css( 'position', 'relative' );
			$( '#globalWrapper' ).css( 'top', expandableBannerHeight );
			bannerDivElement.css( 'top', '-20px' );
			bannerDivElement.css( 'background', 'none' );
			break;
	}
	setTimeout( animateProgressBar, 1000 );
}

function addBannerSpaceWithRollo() {
	var expandableBannerHeight = $( 'div#WMDE_Banner' ).height() + 44,
		bannerDivElement = $( '#WMDE_Banner' ),
		skin = getSkin();

	if ( !showBanner ) {
		return;
	}
	switch ( skin ) {
		case 'vector':
			bannerDivElement.css( 'top', 0 - expandableBannerHeight );
			$( '#mw-panel' ).animate( { top: expandableBannerHeight + 160 }, 1000 );
			$( '#mw-head' ).animate( { top: expandableBannerHeight }, 1000 );
			$( '#mw-page-base' ).animate( { paddingTop: expandableBannerHeight }, 1000 );
			break;
		case 'monobook':
			$( '#globalWrapper' ).css( 'position', 'relative' );
			$( '#globalWrapper' ).css( 'top', expandableBannerHeight );
			bannerDivElement.css( 'top', '-20px' );
			bannerDivElement.css( 'background', 'none' );
			break;
	}
	bannerDivElement.css( 'display', 'block' );
	bannerDivElement.animate( { top: 0 }, 1000 );
	setTimeout( animateProgressBar, 1000 );
}

function removeBannerSpace() {
	var $intervalOptionsContainer = $( 'div.interval-options' ),
		expandableBannerHeight = $intervalOptionsContainer.height();
	switch ( getSkin() ) {
		case 'vector':
			$( '#mw-panel' ).css( 'top', 160 );
			$( '#mw-head' ).css( 'top', 0 );
			$( '#mw-page-base' ).css( 'padding-top', 0 );
			break;
		case 'minerva':
			$( '#mw-mf-viewport' ).css( 'top', expandableBannerHeight );
			break;
		case 'monobook':
			$( '#globalWrapper' ).css( 'position', 'relative' );
			$( '#globalWrapper' ).css( 'top', 0 );
			break;
	}
}

function addSpaceForIntervalOptions() {
	var $intervalOptionsContainer = $( 'div.interval-options' ),
		expandableBannerHeight = $intervalOptionsContainer.height();
	if ( $intervalOptionsContainer && $intervalOptionsContainer.is( ':visible' ) ) {
		return;
	}

	switch ( getSkin() ) {
		case 'vector':
			$( '#mw-panel' ).css( { top: parseInt( $( '#mw-panel' ).css( 'top' ), 10 ) + expandableBannerHeight + 'px' } );
			$( '#mw-head' ).css( { top: parseInt( $( '#mw-head' ).css( 'top' ), 10 ) + expandableBannerHeight + 'px' } );
			$( '#mw-page-base' ).css( { paddingTop: parseInt( $( '#mw-page-base' ).css( 'padding-top' ), 10 ) + expandableBannerHeight + 'px' } );
			break;
		case 'minerva':
			$( '#mw-mf-viewport' ).css( { top: parseInt( $( '#mw-mf-viewport' ).css( 'top' ), 10 ) + expandableBannerHeight + 'px' } );
			break;
		case 'minerva':
			$( '#mw-mf-viewport' ).css( 'top', 0 );
			break;
		case 'monobook':
			$( '#globalWrapper' ).css( { top: parseInt( $( '#globalWrapper' ).css( 'top' ), 10 ) + expandableBannerHeight + 'px' } );
			break;
	}
}

function removeSpaceForIntervalOptions() {
	var $intervalOptionsContainer = $( 'div.interval-options' ),
		expandableBannerHeight = $intervalOptionsContainer.height() + 5;
	if ( $intervalOptionsContainer && !$intervalOptionsContainer.is( ':visible' ) ) {
		return;
	}

	switch ( getSkin() ) {
		case 'vector':
			$( '#mw-panel' ).css( { top: ( parseInt( $( '#mw-panel' ).css( 'top' ), 10 ) - expandableBannerHeight ) + 'px' } );
			$( '#mw-head' ).css( { top: ( parseInt( $( '#mw-head' ).css( 'top' ), 10 ) - expandableBannerHeight ) + 'px' } );
			$( '#mw-page-base' ).css( { paddingTop: ( parseInt( $( '#mw-page-base' ).css( 'padding-top' ), 10 ) - expandableBannerHeight ) + 'px' } );
			break;
		case 'minerva':
			$( '#mw-mf-viewport' ).css( { top: ( parseInt( $( '#mw-mf-viewport' ).css( 'top' ), 10 ) - expandableBannerHeight ) + 'px' } );
			break;
		case 'monobook':
			$( '#globalWrapper' ).css( { top: ( parseInt( $( '#globalWrapper' ).css( 'top' ), 10 ) - expandableBannerHeight ) + 'px' } );
			break;
	}
}

function animateProgressBar() {
	var donationFillElement = $( '#donationFill' ),
		daysLeftElement = $( '#daysLeft' ),
		donationValueElement = $( '#donationValue' ),
		remainingValueElement = $( '#valRem' ),
		preFillValue = 0,
		barWidth, dTarget, dCollected, dRemaining, fWidth, widthToFill;

	donationFillElement.clearQueue();
	donationFillElement.stop();
	donationFillElement.width( preFillValue + 'px' );

	daysLeftElement.hide();

	barWidth = $( '#donationMeter' ).width();
	dTarget = goalSum;
	dCollected = getApprDonationsRaw();
	dRemaining = dTarget - dCollected;
	fWidth = dCollected / dTarget * barWidth;
	widthToFill = getFillWidth( barWidth, dTarget, dCollected );

	donationFillElement.animate( { width: widthToFill + 'px' }, {
		duration: 3000,
		progress: function () {
			var dFill = donationFillElement.width() / widthToFill * fWidth,
				pFill = dFill / barWidth,
				dColl = dTarget * pFill,
				vRem = dTarget - ( dTarget * pFill ) ;
			setCollectedAndRemaining( dColl, vRem );
		},
		complete: function () {
			setCollectedAndRemaining( dCollected, dRemaining );
			$( '#donationText' ).show();
			$( '#donationRemaining' ).show();
			daysLeftElement.show();
		}
	} );

	function setCollectedAndRemaining( donationsCollected, donationsRemaining ) {
		remainingValueElement.html( formatMillion( donationsRemaining ) );
		donationValueElement.html( formatMillion( donationsCollected ) );
	}
}

function formatMillion( value ) {
	value = value / 1000000;
	value = value.toFixed( 1 );
	// TODO Find a way to skip the next step for english locale
	value = value.replace( '.', ',' );
	return value;
}

function setProgressBarSize() {
	var donationFillElement = $( '#donationFill' ),
		barWidth, dCollected;
	barWidth = $( '#donationMeter' ).width();
	dCollected = getApprDonationsRaw();
	donationFillElement.width( getFillWidth( barWidth, goalSum, dCollected ) + 'px' );
}

function getFillWidth( donationBarWidth, donationTarget, donationsCollected ) {
	var widthToFill,
		maxFillWidth = donationBarWidth - $( '#donationRemaining' ).width() - 16,
		fWidth = donationsCollected / donationTarget * donationBarWidth;

	widthToFill = Math.min( maxFillWidth, fWidth );
	// Fill at least 100px or 15% (in case 15% fill is lower than 100px)
	widthToFill = Math.max( 100, 0.15 * donationBarWidth, widthToFill );
	return widthToFill;
}

/**
 * Calculate the number of donors needed, given an average donation amount.
 *
 * This function cannot return less than 0 donors when the target has been reached.
 *
 * @param  {number} averageDonation Average donation amount in EUR
 * @return {number} Number of donors needed (rounded up)
 */
function getRemainingDonorsNeeded( averageDonation ) {
	var dRemaining, dCollected, numDonors;
	dCollected = getApprDonationsRaw();
	dRemaining = goalSum - dCollected;
	numDonors = Math.ceil( dRemaining / averageDonation );
	return Math.max( 0, numDonors );
}

/**
 * For instances where this JS is not generated by a Wiki, try to replace the
 * placeholders with values fram a global object
 */
function replaceWikiVars( text ) {
	var re = /\{\{\{([^\}]+)\}\}\}/g,
		wikiVarMatch;
	while ( ( wikiVarMatch = re.exec( text ) ) !== null ) {
		if ( GlobalBannerSettings[ wikiVarMatch[ 1 ] ] ) {
			text = text.replace( wikiVarMatch[ 0 ], GlobalBannerSettings[ wikiVarMatch[ 1 ] ] );
		} else {
			text = text.replace( wikiVarMatch[ 0 ], '' );
		}
	}
	return text;
}

function getSkin() {
	if ( onMediaWiki() ) {
		return mw.config.get( 'skin' );
	}
	return 'vector';
}

function onMediaWiki() {
	return typeof mw === 'object' && typeof mw.centralNotice !== 'undefined';
}

function bannerClosedCookieIsSet() {
	if ( bannerClosedCookieValue !== '1' ) {
		return $.cookie( bannerClosedCookie ) === bannerClosedCookieValue;
	}
	return $.cookie( bannerClosedCookie ) !== null && typeof $.cookie( bannerClosedCookie ) !== 'undefined';
}
