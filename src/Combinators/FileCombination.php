<?php

namespace WMDE\AssetManagement\Combinators;

interface FileCombination {

    public function combineFiles( array $sourceFiles, $destinationFile );
    
}
