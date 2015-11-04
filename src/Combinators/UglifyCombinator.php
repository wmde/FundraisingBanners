<?php

namespace WMDE\AssetManagement\Combinators;

class UglifyCombinator implements FileCombination {

    private $sourceMapRoot;
    private $sourceMapUrlPrefix;
    private $javaScriptRoot;
    private $executable;

    public function __construct( $javaScriptRoot, $sourceMapRoot, $sourceMapUrlPrefix )
    {
        $this->sourceMapRoot = $sourceMapRoot;
        $this->sourceMapUrlPrefix = $sourceMapUrlPrefix;
        $this->javaScriptRoot = $javaScriptRoot;

    }

    public function combineFiles( array $sourceFiles, $destinationFile )
    {
        $sourceMapName = $destinationFile . '.map';
        $oldDir = getcwd();
        $jsRoot = $this->javaScriptRoot;
        chdir( $jsRoot );
        $assets = array_map( function( $asset ) use ( $jsRoot ) { return $jsRoot . '/' . $asset; }, $sourceFiles );
        $depth = substr_count( $jsRoot, '/' );

        if( !$this->executable ) {
            $uglify = self::getUglifyExecutable();
            if ( !$uglify ) {
                throw new \RuntimeException( 'No uglifyjs executable found' );
            }
            $this->executable = $uglify;
        }

        $cmd = $this->executable . " -o $destinationFile  --source-map $sourceMapName -p $depth " .
            " --source-map-url {$this->sourceMapUrlPrefix}$sourceMapName " .
            "--source-map-root {$this->sourceMapRoot} " . implode( ' ', $assets ) . " >> /dev/null";
        exec( $cmd ) ;
        chdir( $oldDir );
    }

    public static function getUglifyExecutable()
    {
        return exec( 'which uglifyjs' );
    }

}
