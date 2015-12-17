/*jshint unused: false */

function addCharacterSpans( $elem, startCharacter, endCharacter ) {
	var text = $elem.text(),
		i = startCharacter,
		$newContainer = $( '<span/>' );
	if ( startCharacter > 0 ) {
		$newContainer.append( text.substring( 0, startCharacter ) );
	}
	while ( i < endCharacter ) {
		$newContainer.append( $( '<span/>' ).text( text[ i ] ) );
		i++;
	}
	if ( endCharacter < text.length ) {
		$newContainer.append( text.substring( endCharacter ) );
	}
	$elem.html( $newContainer.html() );
}

function getNumberOfCharacters( $elem ) {
	return $elem.text().length;
}

function highlightNthCharacter( $elem, n, className ) {
	$elem.find( 'span:nth-child(' + n + ')' ).addClass( className );
}

function doHighlightStep( step, $elem, highlightClass, numSteps, speed ) {
	highlightNthCharacter( $elem, step, highlightClass );
	if ( step < numSteps ) {
		setTimeout(
			function () {
				doHighlightStep( step + 1, $elem, highlightClass, numSteps, speed );
			},
			speed
		);
	}
}
function animateHighlight( $elem, highlightClass, speed, startCharacter, endCharacter ) {
	startCharacter = startCharacter || 0;
	endCharacter = endCharacter || getNumberOfCharacters( $elem );
	addCharacterSpans( $elem, startCharacter, endCharacter );
	doHighlightStep( 0, $elem, highlightClass, $elem.children( 'span' ).length, speed );
}
