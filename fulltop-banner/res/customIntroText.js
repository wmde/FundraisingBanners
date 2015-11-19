/*jshint unused: false */
/* globals replaceWikiVars */

var customIntroTextDate = replaceWikiVars( '{{{intro-text-custom-date}}}' ),
	introTextNotNeededAfterDate = replaceWikiVars( '{{{intro-text-not-needed-after-date}}}' ),
	customIntroText = replaceWikiVars( '{{{intro-text-custom}}}' ),
	introText = replaceWikiVars( '{{{intro-text}}}' );

function customTextDayIsToday() {
	var today = new Date(),
		customDateParts = customIntroTextDate.split( '-' ),
		customTextDay = new Date( customDateParts[ 0 ], customDateParts[ 1 ] - 1, customDateParts[ 2 ] );
	return today.getFullYear() === customTextDay.getFullYear() && today.getMonth() === customTextDay.getMonth() && today.getDate() === customTextDay.getDate();
}

function getIntroText() {
	if ( customTextDayIsToday() ) {
		return customIntroText;
	}
	return introText;
}

function introTextNotNeeded() {
	var today = new Date(),
		borderDateParts = introTextNotNeededAfterDate.split( '-' ),
		borderDate = new Date( borderDateParts[ 0 ], borderDateParts[ 1 ] - 1, borderDateParts[ 2 ] );
	return ( today.getFullYear() > borderDate.getFullYear() ) ||
		( today.getFullYear() === borderDate.getFullYear() && (
		today.getMonth() > borderDate.getMonth() || ( today.getMonth() === borderDate.getMonth() && today.getDate() > borderDate.getDate() )
		) );
}
