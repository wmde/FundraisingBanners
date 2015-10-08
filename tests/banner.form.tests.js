/**
 * @license GNU GPL v2+
 * @author Leszek Manicki <leszek.manicki@wikimedia.de>
 */
( function ( banner, QUnit ) {
	QUnit.module( 'Banner\'s donation form' );

	QUnit.test( 'Given valid data Form.validateData returns true', function ( assert ) {
		var data = {
				betrag: '5.00',
				periode: '0',
				zahlweise: 'UEB',
				adresstyp: 'person',
				anrede: 'Frau',
				titel: '',
				vorname: 'Foo',
				nachname: 'Bar',
				strasse: 'Foostr. 1',
				plz: '00000',
				ort: 'Foo City',
				country: 'DE',
				email: 'foo@bar.baz'
			},
			done = assert.async();

		banner.form.validateData( data )
			.then( function ( validationResult ) {
				assert.ok( validationResult.validated );
				done();
			} );
	} );
}( Banner, QUnit ) );
