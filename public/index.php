<?php

use Src\Database\Database;
use Src\Database\DB;

require '../vendor/autoload.php';
require '../config/debug.php';
require '../routes/web.php';
require '../src/Support/helpers.php';


// $a = new Database;
// dd($a->con['db_driver']);

app()->run();
