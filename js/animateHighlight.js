/*jshint unused: false */

function addCharacterSpans( $elem, className ) {
	var text = $elem.text(),
		i = 0,
		$newContainer = $( '<span/>' );
	while ( i < text.length ) {
		$newContainer.append( $( '<span/>' ).text( text[ i ] ).addClass( className ) );
		i++;
	}
	$elem.html( $newContainer.html() );
}

function getNumberOfCharacters( $elem ) {
	return $elem.children( 'span' ).length;
}

function highlightNthCharacter( $elem, n, className ) {
	$elem.find( 'span:nth-child(' + n + ')' ).addClass( className );
}

function doHighlightStep( step, $elem, highlightClass, endStep, speed ) {
	highlightNthCharacter( $elem, step, highlightClass );
	if ( step < endStep ) {
		setTimeout(
			function () {
				doHighlightStep( step + 1, $elem, highlightClass, endStep, speed );
			},
			speed
		);
	}
}
function animateHighlight( $elem, highlightClass, speed, startCharacter, endCharacter ) {
	addCharacterSpans( $elem );
	startCharacter = startCharacter || 0;
	endCharacter = endCharacter || getNumberOfCharacters( $elem );
	doHighlightStep( startCharacter, $elem, highlightClass, endCharacter, speed );
}
