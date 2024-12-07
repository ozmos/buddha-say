<?php

namespace App\Traits;

trait CanUseFile {
    protected $extension = '.md';
    protected $srcDir = QUOTES_SRC_DIR;
    protected $outDir = QUOTES_DIST_DIR;

    protected function fetchFile($src)
    {
        return file_get_contents($this->srcDir . $src . $this->extension);
    }
}