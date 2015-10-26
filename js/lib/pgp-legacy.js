/* globals Promise, getPublicKey, randomString, hex2s, GPGpkesk, GPGsed */

function LegacyPGP( libPath ) {}

LegacyPGP.prototype.encrypt = function ( data ) {
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
