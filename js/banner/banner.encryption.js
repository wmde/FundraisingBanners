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
		this.useLegacyEncryption = true;

		$( document ).ready( function () {
			self.initCryptLib();
		} );
	}

	EP = Encryption.prototype;

	/**
	 * Load the encryption library
	 */
	EP.initCryptLib = function () {
		var self = this,
			libUrl = Banner.config.encryption.libUrl,
			legacyEncryption, legacyLibPath;

		if ( typeof Uint8Array === "undefined " ) {
			libUrl = Banner.config.encryption.legacyLibUrl;
			legacyLibPath = libUrl.substring( 0, libUrl.lastIndexOf( '/' ) + 1 );
			this.useLegacyEncryption = true;
		}

		$.ajax( {
			url: libUrl,
			dataType: 'script',
			cache: false,
			success: function () {
				if ( self.useLegacyEncryption ) {
					legacyEncryption = new LegacyPGP( legacyLibPath );
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
