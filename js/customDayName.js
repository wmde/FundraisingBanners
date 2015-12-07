/*jshint unused: false */

var customDayNames = {
	'06.12': 'Nikolaustag',
	'13.12': '3. Advent',
	'20.12': '4. Advent',
	'24.12': 'Weihnachtstag',
	'25.12': '1. Weihnachtstag',
	'26.12': '2. Weihnachtstag'
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

function getCurrentDayName( fallbackFunction ) {
	var	currentDateString = getDateString( new Date() );
	if ( currentDateString in customDayNames ) {
		return customDayNames[ currentDateString ];
	}
	return fallbackFunction();
}
