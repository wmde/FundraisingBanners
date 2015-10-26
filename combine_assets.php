<?php

$allAssets = [
    'js/sensitive_banner_all.js' => [
        'sensitive-banner-static/res/sensitive-banner.js',
        'sensitive-banner-static/res/lightbox.js',
        'js/lib/function-bind.min.js',
        'js/banner/banner.js',
        'js/banner/banner.config.js',
        'js/banner/banner.encryption.js',
        'js/banner/banner.api.js',
        'js/banner/banner.form.js',
    ],
    'css/sensitive_banner_all.css' => [
        'sensitive-banner-static/res/sensitive-banner.css',
        'sensitive-banner-static/res/lightbox.css',
        'sensitive-banner-static/res/icon.css'
    ],
];

foreach ( $allAssets as $outfileName => $assets ) {
    $outfile = fopen( __DIR__ . '/' . $outfileName, 'w' );
    foreach ( $assets as $asset ) {
        fwrite( $outfile, file_get_contents(  __DIR__ . '/' . $asset ) );
    }
    fclose( $outfile );
}
