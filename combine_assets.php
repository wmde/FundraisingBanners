<?php

$allAssets = [
    'js/sensitive_banner_all.js' => [
        'sensitive-banner/js/sensitive-banner.js',
        'sensitive-banner/js/lightbox.js',
        'js/lib/function-bind.min.js',
        'js/lib/base64.min.js',
        'js/banner/banner.js',
        'js/banner/banner.config.js',
        'js/banner/banner.tracking.js',
        'js/banner/banner.encryption.js',
        'js/banner/banner.api.js',
        'js/banner/banner.form.js',
    ],
    'js/lib/pgp-legacy-libs.js' => [
        'js/lib/es6-promise.min.js',
        # The legacy PGP library is not compatible with the base64 polyfill so we have to include two libraries for base64 encoding :(
        'js/lib/pgp/base64.js',
        'js/lib/pgp/rsa.js',
        'js/lib/pgp/aes-enc.js',
        'js/lib/pgp/sha1.js',
        'js/lib/pgp/mouse.js',
        'js/lib/pgp/PGpubkey.js',
        'js/lib/pgp/PGencode.js',
        'js/lib/pgp-legacy.js'
    ],
    'css/sensitive_banner_all.css' => [
        'sensitive-banner/css/sensitive-banner.css',
        'sensitive-banner/css/progressbar.css',
        'sensitive-banner/css/lightbox.css',
        'sensitive-banner/css/icon.css'
    ],
];

foreach ( $allAssets as $outfileName => $assets ) {
    $outfile = fopen( __DIR__ . '/' . $outfileName, 'w' );
    foreach ( $assets as $asset ) {
        fwrite( $outfile, file_get_contents(  __DIR__ . '/' . $asset ) );
    }
    fclose( $outfile );
}
