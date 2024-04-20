<?php

use Src\Application;
use Src\Support\Hash;
use Src\View\View;


if (!function_exists('hash')) {

    function hash($data)
    {

        Hash::make($data);
    }
}

if (!function_exists('value')) {

    function value($value)
    {
        return ($value instanceof Closure) ? $value() : $value;
    }
}

function view($view, $title, $models = [])
{
    View::make($view, $title, $models);
}

function redirect($url)
{
    header('Location: ' . $url);
    exit;
}

function app()
{
    $app = null;
    if (!$app) {

        $app = new Application;
    }
    return $app;
}
