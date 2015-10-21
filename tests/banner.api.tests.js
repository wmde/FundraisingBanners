/**
* @license GNU GPL v2+
* @author Leszek Manicki <leszek.manicki@wikimedia.de>
*/
( function ( banner, QUnit ) {

	QUnit.module( 'Banner.api tests' );

	QUnit.test( 'When given valid data Api.validateData returns status OK', function ( assert ) {
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

		banner.api.sendValidationRequest( data )
			.then( function ( responseData ) {
				assert.equal( responseData.status, 'OK' );
				done();
			} );
	} );

	QUnit.test( 'When given data missing obligatory fields Api.validateData returns status error and list of missing fields', function ( assert ) {
		var data = {
			periode: '0',
			zahlweise: 'UEB',
			adresstyp: 'person',
			anrede: 'Frau',
			titel: '',
			vorname: 'Foo',
			strasse: 'Foostr. 1',
			plz: '00000',
			ort: 'Foo City',
			country: 'DE',
			email: 'foo@bar.baz'
		},
		done = assert.async();

		banner.api.sendValidationRequest( data )
			.then( function ( responseData ) {
				assert.equal( responseData.status, 'ERR' );
				assert.deepEqual( responseData.missing, [ 'betrag', 'nachname' ] );
				done();
			} );
	} );

	QUnit.test( 'When given data containing invalid values Api.validateData returns status error and list of fields with invalid values', function ( assert ) {
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
				plz: '1000',
				ort: 'Foo City',
				country: 'DE',
				email: 'foo@b'
			},
			done = assert.async();

		banner.api.sendValidationRequest( data )
			.then( function ( responseData ) {
				assert.equal( responseData.status, 'ERR' );
				assert.deepEqual( responseData.invalid, [ 'email', 'plz' ] );
				done();
			} );
	} );

}( Banner, QUnit ) );
