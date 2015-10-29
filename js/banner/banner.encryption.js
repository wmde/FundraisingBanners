/**
 * JavaScript library for encryption functionalities
 *
 * @licence GNU GPL v2+
 * @author Kai Nissen <kai.nissen@wikimedia.de>
 */
( function ( Banner ) {
	'use strict';

	var EP;

	function Encryption() {
		var self = this;
		this.initialized = false;
		this.useLegacyEncryption = !this._browserSupportsCryptoAPI();

		$( document ).ready( function () {
			self.initCryptLib();
		} );
	}

	EP = Encryption.prototype;

	/**
	 * Check if the browser supports the window.crypto API
	 */
	EP._browserSupportsCryptoAPI = function () {
		if ( typeof window !== 'undefined' && window.crypto && window.crypto.getRandomValues ) {
			return true;
		} else if ( typeof window !== 'undefined' && typeof window.msCrypto === 'object'
			&& typeof window.msCrypto.getRandomValues === 'function' ) {
			return true;
		}
		return false;
	};

	/**
	 * Load the encryption library
	 */
	EP.initCryptLib = function () {
		var self = this,
			libUrl = Banner.config.encryption.libUrl;

		if ( this.useLegacyEncryption ) {
			libUrl = Banner.config.encryption.legacyLibUrl;
		}

		$.ajax( {
			url: libUrl,
			dataType: 'script',
			cache: true,
			success: function () {
				var legacyEncryption;
				if ( self.useLegacyEncryption ) {
					/*jshint -W117 *//* Ignore undefined LegacyPGP (it's loaded dynamically) */
					legacyEncryption = new LegacyPGP();
					/*jshint +W117 */
					self.encrypt = legacyEncryption.encrypt.bind( legacyEncryption );
				}
				self.initialized = true;
			}
		} );
	};

	/**
	 * Encrypts a message and puts the encrypted data into the given field
	 *
	 * @param {string} data The message to encrypt
	 * @return {Promise}
	 */
	EP.encrypt = function ( data ) {
		var publicKey;
		if ( this.initialized ) {
			publicKey = openpgp.key.readArmored( Banner.config.encryption.publicKey );

			return openpgp.encryptMessage( publicKey.keys, data )
				.then( function ( pgpMessage ) {
					return pgpMessage;
				} );
		}
	};

	Banner.encryption = new Encryption();

} )( Banner );
