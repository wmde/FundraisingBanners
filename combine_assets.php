<?php

use WMDE\AssetManagement\Combinators\UglifyCombinator;
use WMDE\AssetManagement\Combinators\CopyCombinator;
use WMDE\AssetManagement\AssetCombinator;

require( __DIR__ . '/vendor/autoload.php' );

$sourcemapRoot = '';
# TODO get source map root from cmd line if needed
if ( !empty( $_SERVER['SERVER_NAME'] ) && !empty( $_SERVER['REQUEST_SCHEME'] ) ) {
    $sourcemapRoot = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['SERVER_NAME'];
    if ( !empty( $_SERVER['SERVER_PORT'] ) && !( $_SERVER['SERVER_PORT'] == 80 || $_SERVER['SERVER_PORT'] == 443 ) ) {
        $sourcemapRoot .= ':' . $_SERVER['SERVER_PORT'];
    }
    $sourcemapRoot .= '/';
}

$copyCombinator = new CopyCombinator( __DIR__ );
$uglifyCombinator = new UglifyCombinator( __DIR__, $sourcemapRoot, '../' );
$assetCombinator = new AssetCombinator( $copyCombinator, $uglifyCombinator );

$allAssets = include( __DIR__ . '/assets_config.php' );

$assetCombinator->combineAll( $allAssets );
