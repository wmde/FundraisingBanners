<?php

$allAssets = [
    'js/sensitive_banner_all.js' => [
        'sensitive-banner-static/res/sensitive-banner.js',
        'sensitive-banner-static/res/lightbox.js',
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
        'sensitive-banner-static/res/sensitive-banner.css',
        'sensitive-banner-static/res/lightbox.css',
        'sensitive-banner-static/res/icon.css'
    ],
];

function combinewithUglifyJS( $uglifyCommand, $sourcemapRoot, $outfileName, $assets ) {
    $sourceMapName = $outfileName . '.map';
    chdir( __DIR__ );
    $assets = array_map( function( $asset ) { return  __DIR__ . '/' . $asset; }, $assets );
    $depth = substr_count( __DIR__, '/' );
    $cmd = "$uglifyCommand -o $outfileName  --source-map $sourceMapName -p $depth --source-map-url ../$sourceMapName " .
           "--source-map-root $sourcemapRoot " . implode( ' ', $assets ) . " >> /tmp/uglify.log";
    error_log($cmd);
    #`$cmd`;
}

function combineWithPHP( $outfileName, $assets ) {
    $outfile = fopen( __DIR__ . '/' . $outfileName, 'w' );
    foreach ( $assets as $asset ) {
        fwrite( $outfile, file_get_contents(  __DIR__ . '/' . $asset ) );
    }
    fclose( $outfile );
}

error_log("ugstart");
$uglifyCommand = trim( `which uglifyjs` );
error_log("ugend -- $uglifyCommand");
$sourcemapRoot = '';
if ( !empty( $_SERVER['SERVER_NAME'] ) && !empty( $_SERVER['REQUEST_SCHEME'] ) ) {
    $sourcemapRoot = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['SERVER_NAME'];
    if ( !empty( $_SERVER['SERVER_PORT'] ) && !( $_SERVER['SERVER_PORT'] == 80 || $_SERVER['SERVER_PORT'] == 443 ) ) {
        $sourcemapRoot .= ':' . $_SERVER['SERVER_PORT'];
    }
    $sourcemapRoot .= '/';
}

foreach ( $allAssets as $outfileName => $assets ) {
    if ( $uglifyCommand && $sourcemapRoot && preg_match( '/\.js$/', $outfileName ) ) {
        combinewithUglifyJS( $uglifyCommand, $sourcemapRoot, $outfileName, $assets );
    }
    else {
        combineWithPHP( $outfileName, $assets );
    }

}
