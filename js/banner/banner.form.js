/**
 * Class handling submitting of the donation form embedded in the banner.
 *
 * @license GNU GPL v2+
 * @author Leszek Manicki <leszek.manicki@wikimedia.de>
 */
( function ( banner, $ ) {
	'use strict';

	function Form() {
		var self = this;
		this.validated = false;
		this.validationPending = false;
		this.bankCheckPending = false;
		$( document ).ready( function () {
			self.amountValidationAnchor = $( '#amount75' );
			self._initSubmitHandler();
			self._initBankDataHandler();
			self._initFieldClearHandlers();
			$( '#' + banner.config.form.formId + ' .amount-radio' ).on( 'click', function () {
				self._clearElementValidity( self.amountValidationAnchor );
			} );
		} );
	}

	Form.prototype._initSubmitHandler = function () {
		var self = this,
			form = $( '#' + banner.config.form.formId );
		form.prop( 'action', banner.config.form.formAction );
		form.on( 'submit', function () {
			if ( !self.validated && !self.validationPending ) {
				self.validated = false;
				self.validationPending = true;
				self._clearValidity();
				self.validateData( self._getFormData() )
					.then( function ( validationResult ) {
						self.validationPending = false;
						if ( validationResult.validated ) {
							self.validated = true;
							form.trigger( 'banner:validationSucceeded' );
						} else {
							self._applyValidationErrors( validationResult.fieldsMissingValue, validationResult.fieldsWithInvalidValue );
							form.trigger( 'banner:validationFailed' );
						}
					} );
			}
			return self.validated;
		} );
	};

	Form.prototype._initFieldClearHandlers = function () {
		var clearBankData = function () {
			$( '#' + banner.config.form.formId + ' input[name=bic]' ).val( '' );
			$( '#' + banner.config.form.formId + ' input[name=iban]' ).val( '' );
			$( '#' + banner.config.form.formId + ' input[name=konto]' ).val( '' );
			$( '#' + banner.config.form.formId + ' input[name=blz]' ).val( '' );
			$( '#' + banner.config.form.formId + ' input[name=bankname]' ).val( '' );
		};
		$( '#address-type-1' ).on( 'click', function () {
			$( '#' + banner.config.form.formId + ' input[name=firma]' ).val( '' );
		} );
		$( '#address-type-2' ).on( 'click', function () {
			$( '#' + banner.config.form.formId + ' input[name=vorname]' ).val( '' );
			$( '#' + banner.config.form.formId + ' input[name=nachname]' ).val( '' );
			$( '#' + banner.config.form.formId + ' select[name=titel]' ).val( '' );
		} );
		$( '#address-type-3' ).on( 'click', function () {
			$( '#' + banner.config.form.formId + ' input[name=firma]' ).val( '' );
			$( '#' + banner.config.form.formId + ' input[name=vorname]' ).val( '' );
			$( '#' + banner.config.form.formId + ' input[name=nachname]' ).val( '' );
			$( '#' + banner.config.form.formId + ' input[name=anrede]' ).prop( 'checked', false );
			$( '#' + banner.config.form.formId + ' select[name=titel]' ).val( '' );
			$( '#' + banner.config.form.formId + ' input[name=email]' ).val( '' );
			$( '#' + banner.config.form.formId + ' input[name=plz]' ).val( '' );
			$( '#' + banner.config.form.formId + ' input[name=ort]' ).val( '' );
			$( '#' + banner.config.form.formId + ' input[name=strasse]' ).val( '' );
		} );
		$( '#WMDE_BannerForm-payment button' ).each( function ( index, element ) {
			var $element = $( element );

			if ( $element.data( 'behavior' ) === 'clearBankData' ) {
				$element.on( 'click', clearBankData );
			}
		} );
	};

	Form.prototype._initBankDataHandler = function () {
		$( '#account-number, #bank-code, #iban' ).on( 'change', this.checkBankData.bind( this ) );
	};

	Form.prototype.checkBankData = function ( evt ) {
		var cleanBankData = function ( data, isIBAN ) {
				data = data.toString();
				if ( isIBAN ) {
					data = data.toUpperCase();
					return data.replace( /[^0-9A-Z]/g, '' );
				} else {
					return data.replace( /[^0-9]/g, '' );
				}
			},
			self = this,
			data,
			apiMethod,
			accNumElm = $( '#account-number' ),
			bankCodeElm = $( '#bank-code' );

		if ( evt.target.id === 'account-number' || evt.target.id === 'bank-code' ) {

			if ( accNumElm.val() === '' || bankCodeElm.val() === '' ) {
				return;
			}
			data = {
				accNum: cleanBankData( accNumElm.val(), false ),
				bankCode: cleanBankData( bankCodeElm.val(), false )
			};
			apiMethod = banner.api.sendIbanGenerationRequest.bind( banner.api );
		} else if ( evt.target.id === 'iban' ) {
			data = { iban: cleanBankData( evt.target.value, true ) };
			apiMethod = banner.api.sendIbanCheckRequest.bind( banner.api );
		}
		$( '#bic, #iban, #account-number, #bank-code' ).each( function ( index, element ) {
			self._clearElementValidity( $( element ) );
		} );
		this.bankCheckPending = true;
		apiMethod( data ).then( this._setBankdataAfterCheck.bind( this ) );
	};

	Form.prototype._setBankdataAfterCheck = function ( data ) {
		var $iban = $( '#iban' ),
			errorMessage;
		if ( data.status === 'OK' ) {
			$iban.val( data.iban ? data.iban : '' );
			$( '#bic' ).val( data.bic ? data.bic : '' );
			$( '#account-number' ).val( data.account ? data.account : '' );
			$( '#bank-code' ).val( data.bankCode ? data.bankCode : '' );
			$( '#bank-name' ).val( data.bankName ? data.bankName : '' );
		} else {
			$iban.val( '' );
			errorMessage = data.message || 'Die eingegebenen Bankdaten sind nicht korrekt.';
			this._showError( $iban, errorMessage );
			this._showError( $( '#account-number' ), errorMessage );
		}
		this.bankCheckPending = false;
	};

	Form.prototype._clearValidity = function () {
		var self = this;
		$( '#' + banner.config.form.formId + ' :input:not([type=hidden])' ).each( function ( index, element ) {
			self._clearElementValidity( $( element ) );
		} );
		self._clearElementValidity( this.amountValidationAnchor );
	};

	Form.prototype._clearElementValidity = function ( $element ) {
		var $parent = $element.parent();
		$element.removeClass( 'invalid' ).removeClass( 'valid' );
		$( '.validation', $parent ).removeClass( 'icon-bug' ).removeClass( 'icon-ok' );
		$( '.form-field-error-box', $parent ).remove();
	};

	/**
	 * @return {Object}
	 */
	Form.prototype._getFormData = function () {
		/* globals getAmount */
		var formId = banner.config.form.formId,
			formData = {
				adresstyp: $( '#' + formId + ' input[name="adresstyp"]:checked' ).val(),
				betrag: getAmount(),
				periode: $( '#' + formId + ' :input[name="periode"]' ).val(),
				zahlweise:  $( '#zahlweise' ).val()
			};
		if ( formData.adresstyp !== 'anonym' ) {
			$.extend( formData, {
				country: $( '#' + formId + ' select[name="country"]' ).val(),
				email: $( '#' + formId + ' :input[name="email"]' ).val(),
				ort: $( '#' + formId + ' :input[name="ort"]' ).val(),
				plz: $( '#' + formId + ' :input[name="plz"]' ).val(),
				strasse: $( '#' + formId + ' :input[name="strasse"]' ).val()
			} );
		}
		if ( formData.adresstyp === 'person' ) {
			$.extend( formData, {
				anrede: $( '#' + formId + ' input[name="anrede"]:checked' ).val(),
				titel: $( '#' + formId + ' select[name="titel"]' ).val(),
				vorname: $( '#' + formId + ' :input[name="vorname"]' ).val(),
				nachname: $( '#' + formId + ' :input[name="nachname"]' ).val()
			} );
		} else if ( formData.adresstyp === 'firma' ) {
			$.extend( formData, {
				firma: $( '#' + formId + ' :input[name="firma"]' ).val(),
				anrede: 'Firma'
			} );
		}
		if ( formData.zahlweise === 'BEZ' ) {
			$.extend( formData, {
				bankname: $( '#' + formId + ' :input[name="bankname"]' ).val(),
				bic: $( '#' + formId + ' :input[name="bic"]' ).val(),
				blz: $( '#' + formId + ' :input[name="blz"]' ).val(),
				iban: $( '#' + formId + ' :input[name="iban"]' ).val(),
				konto: $( '#' + formId + ' :input[name="konto"]' ).val()
			} );
		}
		return formData;
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
	Form.prototype.validateData = function ( data ) {
		return banner.api.sendValidationRequest( data )
			.then( function ( responseData ) {
				if ( responseData.status === 'OK' ) {
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
	Form.prototype._applyValidationErrors = function ( fieldsMissingValue, fieldsWithInvalidValue ) {
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

		$( '#' + banner.config.form.formId + ' :input:not([type=hidden])' ).each( function ( index, element ) {
			if ( $.inArray( $( element ).attr( 'name' ), fieldsMissingValue ) > -1 ) {
				self._markMissing( $( element ) );
				return true;
			}
			if ( $.inArray( $( element ).attr( 'name' ), fieldsWithInvalidValue ) > -1 ) {
				self._markInvalid( $( element ) );
				return true;
			}
			self._markValid( $( element ) );
		} );
	};

	Form.prototype._markInvalid = function ( $element ) {
		this._showError( $element );
	};

	Form.prototype._markMissing = function ( $element ) {
		// Since the server-side validation does not get missing fields except for amount,
		// we use a more generic error message and handle the errors the same
		this._showError( $element );
	};

	Form.prototype._showError = function ( $element ) {
		var $parent = $element.parent(),
			errorText;
		if ( arguments.length > 1 ) {
			errorText = arguments[ 1 ];
		} else {
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
	};

	Form.prototype._markValid = function ( $element ) {
		var $parent = $element.parent();
		$element.addClass( 'valid' );
		$( '.validation', $parent ).addClass( 'icon-ok' );
	};

	banner.form = new Form();

}( Banner, jQuery ) );
