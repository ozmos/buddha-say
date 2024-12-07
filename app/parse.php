#!/usr/bin/env php
<?php

$markdown = file_get_contents(QUOTES_SRC_DIR . $argv[1]);

$parts = array_values(array_filter(explode('---', $markdown), function ($part) {
    // remove empty parts
    return $part;
}));

$meta = [];
$content = [];

if (yaml_parse($parts[0])) {
    $meta = yaml_parse($parts[0]);
    $content = array_slice($parts,1);
} else {
    $content = $parts;
}

$content = array_map(function($line) {
    $line = trim($line);
    $line = "$line\n";
    $line .= extractMeta();
    return $line;
}, $content);

function extractMeta() {
    global $meta;
    return $meta['author'] ? "\n- " . $meta['author'] . "\n" : "";
}

$file = 'out.txt';

file_put_contents($file, join("%\n", $content));
