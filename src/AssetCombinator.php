<?php

namespace WMDE\AssetManagement;

use WMDE\AssetManagement\Combinators\FileCombination;
use WMDE\AssetManagement\Combinators\UglifyCombinator;
use WMDE\AssetManagement\Combinators\CopyCombinator;

/**
 * Combine assets depending on file type
 */
class AssetCombinator implements FileCombination
{

    private $copyCombinator;
    private $uglifyCombinator;

    public function __construct( CopyCombinator $copyCombinator, UglifyCombinator $uglifyCombinator )
    {
        $this->copyCombinator = $copyCombinator;
        $this->uglifyCombinator = $uglifyCombinator;
    }

    public function combineFiles( array $sourceFiles, $destinationFile ) {
        $combinator = $this->getCombinator( $destinationFile );
        $combinator->combineFiles( $sourceFiles, $destinationFile );
    }

    public function combineAll( array $fileConfig )
    {
        foreach ( $fileConfig as $destinationFile => $sourceFiles ) {
            $this->combineFiles( $sourceFiles, $destinationFile );
        }
    }

    private function getCombinator( $destinationFile ) {
        if ( preg_match( '/\.js$/', $destinationFile ) && UglifyCombinator::getUglifyExecutable() ) {
            return $this->uglifyCombinator;
        }
        else {
            return $this->copyCombinator;
        }
    }

}
