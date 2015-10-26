/* globals Promise, getPublicKey, randomString, hex2s, GPGpkesk, GPGsed */

function LegacyPGP( libPath ) {
    this.initialized = true;
    //this._loadLibraries( libPath );
}

LegacyPGP.prototype._loadLibraries = function ( libPath ) {
    var i = 0,
        urls = [
            'base64.min.js',
            'es6-promise.min.js',
            'pgp-legacy-libs.js'
        ],
        self = this;

   ( function loadNextScript() {
        if ( i < urls.length ) {
             $.getScript( libPath + urls[ i ]).done( function () {
                 ++i;
                 loadNextScript();
             } );
        }
        else {
            self.initialized = true;
        }
   } )();
};

LegacyPGP.prototype.encrypt = function ( data ) {
    var self = this;
    return new Promise( function (resolve, reject) {
        var symAlg = 7,          // AES=7, AES192=8, AES256=9
            kSize  = [ 16, 24, 32], // key length in bytes
            keylen = kSize[ symAlg - 7 ],  // session key length in bytes
            keyTypes = {
                RSA: 0,
                ELGAMAL: 1
            },
            sesskey = randomString( keylen, 0 ),
            keyId, keyType, cyphertext, publicKey;

        if ( !this.initialized ) {
            reject( Error( 'Encryption library not initialized' ) );
            return;
        }
        publicKey = new getPublicKey( Banner.config.encryption.publicKey );
        if ( !keyTypes.hasOwnProperty( publicKey.type ) ) {
            reject( Error( 'Unknown key type' ) );
            return;
        }
        keyType = keyTypes[ publicKey.type ];
        keyId =  hex2s( publicKey.keyid );
        cyphertext = GPGpkesk( keyId, keyType, symAlg, sesskey, publicKey.pkey.replace( /\n/g, '' ) );
        cyphertext += GPGsed( sesskey, data );
        resolve( cyphertext );
    } );

};
