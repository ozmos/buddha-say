#!/usr/bin/env php
<?php
// This is the app's entry point
// require './app/parse.php';

use App\Parse;

require __DIR__ . '/config.php';
require __DIR__ . '/vendor/autoload.php';

new Parse('test');
