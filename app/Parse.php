<?php
declare(strict_types=1);

namespace App;

use App\Traits\CanUseFile;

class Parse
{
    use CanUseFile;

    private string $markdown;
    private string $filename;
    private string $src;
    private array $parts;
    private array $meta;
    private array $content;

    public function __construct(string $src) {
        $this->src = $src;
        $this->setMarkdown();
    }

    function setMarkdown() {
        $this->markdown = $this->fetchFile($this->src);
    }

    function setParts() {
        $this->parts = array_values(array_filter(explode('---', $this->markdown), function($part) {
            return $part;
        }));
    }
}