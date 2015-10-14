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
			self.amountValidationAnchor = $( '#amount75' );
			self._initSubmitHandler();
			$( '#' + banner.config.form.formId + ' .amount-radio' ).on( 'click', function() {
				self._clearElementValidity( self.amountValidationAnchor );
			} );
		} );
	}

	Form.prototype._initSubmitHandler = function() {
		var self = this;
		var form = $( '#' + banner.config.form.formId );
		form.on( 'submit', function() {
			if( !self.validated && !self.validationPending ) {
				self.validated = false;
				self.validationPending = true;
				self._clearValidity();
				self.validateData( self._getFormData() )
					.then( function( validationResult ) {
						self.validationPending = false;
						if( validationResult.validated ) {
							self.validated = true;
							form.submit();
						} else {
							self._applyValidationErrors( validationResult.fieldsMissingValue, validationResult.fieldsWithInvalidValue );
							form.trigger( 'banner:validationFailed' );
						}
					} );
			}
			return self.validated;
		} );
	};

	Form.prototype._clearValidity = function() {
		var self = this;
		$( '#' + banner.config.form.formId + ' :input' ).each( function( index, element ) {
			self._clearElementValidity( $( element ) );
		} );
		self._clearElementValidity( this.amountValidationAnchor );
	};

	Form.prototype._clearElementValidity = function( $element ) {
		var $parent = $element.parent();
		$element.removeClass( 'invalid' ).removeClass( 'valid' );
		$( '.validation', $parent ).removeClass( 'icon-bug' ).removeClass( 'icon-ok' );
		$( '.form-field-error-box', $parent ).remove();
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
		var self = this,
			valueMissingIndex = $.inArray( 'betrag', fieldsMissingValue ),
			valueInvalidIndex = $.inArray( 'betrag', fieldsWithInvalidValue );
		if ( valueInvalidIndex > -1 ) {
			this._showError( this.amountValidationAnchor, 'Bitte geben Sie einen gültigen Betrag ein.' );
			fieldsWithInvalidValue.splice( valueInvalidIndex, 1 );
			// Invalid values cause this
			if ( valueMissingIndex > -1 ) {
				fieldsMissingValue.splice( valueMissingIndex, 1 );
			}
		}
		if ( valueMissingIndex > -1 ) {
			this._showError( this.amountValidationAnchor, 'Bitte geben Sie einen Betrag ein.' );
			fieldsMissingValue.splice( valueMissingIndex, 1 );
		}

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
		this._showError( $element );
	};

	Form.prototype._markMissing = function( $element ) {
		// Since the server-side validation does not get missing fields except for amount,
		// we use a more generic error message and handle the errors the same
		this._showError( $element );
	};

	Form.prototype._showError = function( $element ) {
		var $parent = $element.parent(),
			errorText;
		if ( arguments.length > 1 ) {
			errorText = arguments[1];
		}
		else {
			errorText = 'Bitte korrigieren Sie dieses Feld.';
		}
		$element.addClass( 'invalid' );
		$( '.validation', $parent ).addClass( 'icon-bug' );
		if ( !$( '.form-field-error-box', $parent ).length ) {
			$parent.append(
				'<div class="form-field-error-box"><div class="form-field-error-arrow"></div><span class="form-field-error-text">' +
				errorText +
				'</span></div></div>'
			);
		}
	}

	Form.prototype._markValid = function( $element ) {
		var $parent = $element.parent();
		$element.addClass( 'valid' );
		$( '.validation', $parent ).addClass( 'icon-ok' );
	};

	banner.form = new Form();

}( Banner, jQuery ) );
