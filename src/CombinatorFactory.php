<?php

namespace WMDE\AssetManagement;

use WMDE\AssetManagement\Combinators\UglifyCombinator;
use WMDE\AssetManagement\Combinators\CopyCombinator;
use WMDE\AssetManagement\AssetCombinator;

class CombinatorFactory {

    public static function createCombinatorForServer() {
        $sourcemapRoot = self::getSourcemapRootFromServerVars();
        $copyCombinator = new CopyCombinator( __DIR__ . '/..' );
        $uglifyCombinator = new UglifyCombinator( __DIR__ . '/..', $sourcemapRoot, '../' );
        return new AssetCombinator( $copyCombinator, $uglifyCombinator );
    }

    private static function getSourcemapRootFromServerVars() {
        $sourcemapRoot = '';
        if ( !empty( $_SERVER['SERVER_NAME'] ) && !empty( $_SERVER['REQUEST_SCHEME'] ) ) {
            $sourcemapRoot = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['SERVER_NAME'];
            if ( !empty( $_SERVER['SERVER_PORT'] ) && !( $_SERVER['SERVER_PORT'] == 80 || $_SERVER['SERVER_PORT'] == 443 ) ) {
                $sourcemapRoot .= ':' . $_SERVER['SERVER_PORT'];
            }
            $sourcemapRoot .= '/';
        }
        return $sourcemapRoot;
    }

}
