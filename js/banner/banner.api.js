/**
 * Donation API used in the banner
 *
 * @license GNU GPL v2+
 * @author Leszek Manicki <leszek.manicki@wikimedia.de>
 */
( function ( banner, $ ) {
	'use strict';

	function Api() {
		banner.config.setConfig( {
			api: {
				apiUrl: 'https://spenden.wikimedia.de/ajax.php',
				validationModule: 'ajaxValidation',
				validationAction: 'validateDonation',
				ibanModule: 'action',
				ibanGenerationAction: 'generateIban',
				ibanCheckAction: 'checkIban'
			}
		} );
	}

	/**
	 * Encrypts request data and sends a request to the API.
	 *
	 * @param {string} module
	 * @param {string} action
	 * @param {Object} data
	 * @return {Promise}
	 */
	Api.prototype.sendEncryptedRequest = function ( module, action, data ) {
		var self = this;
		return banner.encryption.encrypt( $.param( data ) )
			.then( function ( encryptedData ) {
				return self.sendRequest( module, action, {
					enc: self.encodeBase64( encryptedData )
				} );
			} );
	};

	/**
	 * Returns base64-encoded string representation of the object.
	 *
	 * @param {Object} data
	 * @return {string}
	 */
	Api.prototype.encodeBase64 = function ( data ) {
		return window.btoa( data );
	};

	/**
	 * Sends a request to API and returns results.
	 *
	 * @param {string} module
	 * @param {string} action
	 * @param {Object} data
	 * @return {Object} jQuery XMLHttpRequest (jqXHR)
	 */
	Api.prototype.sendRequest = function ( module, action, data ) {
		var requestData = data;
		$.extend( requestData, { module: module, action: action } );
		return $.ajax( {
			url: banner.config.api.apiUrl,
			data: requestData,
			dataType: 'jsonp'
		} );
	};

	/**
	 * Sends a data validation request to API and returns results.
	 *
	 * @param {Object} data
	 * @return {Promise}
	 *         Resolved parameter:
	 *         {Object} responseData object with keys:
	 *                  - status: "OK" or "ERR",
	 *                  - invalid: array containing names of fields with invalid values,
	 *                  - missing: array containing names of missing obligatory fields.
	 */
	Api.prototype.sendValidationRequest = function ( data ) {
		return this.sendEncryptedRequest(
			banner.config.api.validationModule,
			banner.config.api.validationAction,
			data
		);
	};

	/**
	 * Sends a reqeust to the API to generate IBAN and BIC from bank data
	 * @param {Object} data
	 * @return {Promise}
	 *         Resolved parameter:
	 *         {Object} responseData object with keys:
	 *                  - status: "OK" or "ERR",
	 *                  - iban
	 *                  - bic
	 *                  - bankCode
	 *                  - bankName
	 *                  - account
	 *                  - message ( if status is ERR )
	 */
	Api.prototype.sendIbanGenerationRequest = function ( data ) {
		return this.sendEncryptedRequest(
			banner.config.api.ibanModule,
			banner.config.api.ibanGenerationAction,
			data
		);
	};

	/**
	 * Sends a reqeust to the API to check the validate of an IBAN
	 * @param {Object} data
	 * @return {Promise}
	 *         Resolved parameter:
	 *         {Object} responseData object with keys:
	 *                  - status: "OK" or "ERR",
	 *                  - iban
	 *                  - bic
	 *                  - bankCode
	 *                  - bankName
	 *                  - account
	 *                  - message ( if status is ERR )
	 */
	Api.prototype.sendIbanCheckRequest = function ( data ) {
		return this.sendEncryptedRequest(
			banner.config.api.ibanModule,
			banner.config.api.ibanCheckAction,
			data
		);
	};

	banner.api = new Api();

}( Banner, jQuery ) );
