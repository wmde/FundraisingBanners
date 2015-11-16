/*jshint unused: false */
/* globals replaceWikiVars */

var startDate = replaceWikiVars( '{{{campaign-start-date}}}' );

function getDaysSinceCampaignStart() {
	var startDateParts = startDate.split( '-' ),
		startDay = new Date( startDateParts[ 0 ], startDateParts[ 1 ] - 1, startDateParts[ 2 ] );
	return Math.floor( new Date( new Date() - startDay ) / 1000 / 60 / 60 / 24 );
}

function getCampaignDayString() {
	var daysSinceStart = getDaysSinceCampaignStart() + 1;
	return daysSinceStart + '.';
}
