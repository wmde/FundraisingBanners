/*jshint unused: false */

var customDayNames = {
	'06.12': {
		de: 'Nikolaustag',
		en: 'St Nicholas Day'
	},
	'24.12': {
		de: 'Weihnachtstag',
		en: 'Christmas Eve'
	},
	'25.12': {
		de: '1. Weihnachtstag',
		en: 'Christmas Day'
	},
	'26.12': {
		de: '2. Weihnachtstag',
		en: 'Boxing Day'
	}
};

function getDateString( date ) {
	var dateString = '',
		day = date.getDate(),
		month = date.getMonth() + 1;
	if ( day < 10 ) {
		dateString += '0';
	}
	dateString += day;
	dateString += '.';
	if ( month < 10 ) {
		dateString += month;
	}
	dateString += month;
	return dateString;
}

function getCurrentDayName( fallbackFunction, lang ) {
	var	currentDateString = getDateString( new Date() ),
		language = lang || 'de';
	if ( currentDateString in customDayNames ) {
		return customDayNames[ currentDateString ][ language ];
	}
	return fallbackFunction();
}
