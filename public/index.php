<?php

use Src\Support\Arr;

require '../vendor/autoload.php';
require '../config/debug.php';
require '../routes/web.php';
require '../src/Support/helpers.php';

app()->run();
dd(Arr::only(
    ['username' => 'admin', 'email' => 'admin@gmail.com'],
    ['username']
));
