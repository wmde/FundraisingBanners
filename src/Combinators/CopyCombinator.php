<?php

namespace WMDE\AssetManagement\Combinators;

class CopyCombinator implements FileCombination {

    private $javaScriptRoot;

    public function __construct( $javaScriptRoot )
    {
        $this->javaScriptRoot = $javaScriptRoot;
    }

    public function combineFiles( array $sourceFiles, $destinationFile ) {
        $fileName = $this->javaScriptRoot . '/' . $destinationFile;
        $outfile = fopen( $fileName, 'w' );
        if( !$outfile ) {
            throw new \RuntimeException( 'Could not open output file ' . $fileName );
        }
        foreach ( $sourceFiles as $asset ) {
            fwrite( $outfile, file_get_contents(  $this->javaScriptRoot . '/' . $asset ) );
        }
        fclose( $outfile );
    }
}
