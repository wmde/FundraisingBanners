/**
 * Class handling submitting of the donation form embedded in the banner.
 *
 * @license GNU GPL v2+
 * @author Leszek Manicki <leszek.manicki@wikimedia.de>
 */
( function( banner, $ ) {
	'use strict';

	function Form() {
		var self = this;
		this.validated = false;
		this.validationPending = false;
		$( document ).ready( function() {
			self._initSubmitHandler();
		} );
	}

	Form.prototype._initSubmitHandler = function() {
		var self = this;
		$( '#' + banner.config.form.formId ).on( 'submit', function() {
			if( !self.validated && !self.validationPending ) {
				self.validated = false;
				self.validationPending = true;
				self._clearValidity();
				self.validateData( self._getFormData() )
					.then( function( validationResult ) {
						self.validationPending = false;
						if( validationResult.validated ) {
							self.validated = true;
							$( '#' + banner.config.form.formId ).submit();
						} else {
							self._applyValidationErrors( validationResult.fieldsMissingValue, validationResult.fieldsWithInvalidValue );
						}
					} );
			}
			return self.validated;
		} );
	};

	Form.prototype._clearValidity = function() {
		$( '#' + banner.config.form.formId + ' :input' ).each( function( index, element ) {
			$( element ).removeClass( 'valid' ).removeClass( 'invalid' );
		} );
	};

	/**
	 * @return {Object}
	 */
	Form.prototype._getFormData = function() {
		var formId = banner.config.form.formId;
		return {
			adresstyp: $( '#' + formId + ' :input[name="adresstyp"]' ).val(),
			anrede: $( '#' + formId + ' :input[name="anrede"]' ).val(),
			bankname: $( '#' + formId + ' :input[name="bankname"]' ).val(),
			betrag: getAmount(),
			bic: $( '#' + formId + ' :input[name="bic"]' ).val(),
			blz: $( '#' + formId + ' :input[name="blz"]' ).val(),
			country: $( '#' + formId + ' :input[name="country"]' ).val(),
			email: $( '#' + formId + ' :input[name="email"]' ).val(),
			firma: $( '#' + formId + ' :input[name="firma"]' ).val(),
			iban: $( '#' + formId + ' :input[name="iban"]' ).val(),
			konto: $( '#' + formId + ' :input[name="konto"]' ).val(),
			nachname: $( '#' + formId + ' :input[name="nachname"]' ).val(),
			ort: $( '#' + formId + ' :input[name="ort"]' ).val(),
			periode: $( '#' + formId + ' :input[name="periode"]' ).val(),
			plz: $( '#' + formId + ' :input[name="plz"]' ).val(),
			strasse: $( '#' + formId + ' :input[name="strasse"]' ).val(),
			titel: $( '#' + formId + ' :input[name="titel"]' ).val(),
			vorname: $( '#' + formId + ' :input[name="vorname"]' ).val(),
			zahlweise: $( '#' + formId + ' :input[name="zahlweise"]' ).val()
		};
	};

	/**
	 * Validates given data using API.
	 *
	 * @param {Object} data
	 * @return {Promise}
	 *         Resolved parameter:
	 *         {Object} object with keys:
	 *                  - validated: true or false,
	 *                  - fieldsMissingValue: array containing names of fields with invalid values,
	 *                  - fieldsWithInvalidValue: array containing names of missing obligatory fields.
	 */
	Form.prototype.validateData = function( data ) {
		return banner.api.sendValidationRequest( data )
			.then( function( responseData ) {
				if( responseData.status === 'OK' ) {
					return {
						validated: true
					};
				} else {
					return {
						validated: false,
						fieldsMissingValue: responseData.missing,
						fieldsWithInvalidValue: responseData.invalid
					};
				}
			} );
	};

	/**
	 * @param {string[]} fieldsMissingValue
	 * @param {string[]} fieldsWithInvalidValue
	 */
	Form.prototype._applyValidationErrors = function( fieldsMissingValue, fieldsWithInvalidValue ) {
		var self = this;
		$( '#' + banner.config.form.formId + ' :input' ).each( function( index, element ) {
			if( $.inArray( $( element ).attr( 'name' ), fieldsMissingValue ) > -1 ) {
				self._markMissing( $( element ) );
				return true;
			}
			if( $.inArray( $( element ).attr( 'name' ), fieldsWithInvalidValue ) > -1 ) {
				self._markInvalid( $( element ) );
				return true;
			}
			self._markValid( $( element ) );
		} );
	};

	Form.prototype._markInvalid = function( $element ) {
		$element.removeClass( 'valid' ).addClass( 'invalid' );
	};

	Form.prototype._markMissing = function( $element ) {
		$element.removeClass( 'valid' ).addClass( 'invalid' );
	};

	Form.prototype._markValid = function( $element ) {
		$element.removeClass( 'invalid' ).addClass( 'valid' );
	};

	banner.form = new Form();

}( Banner, jQuery ) );
