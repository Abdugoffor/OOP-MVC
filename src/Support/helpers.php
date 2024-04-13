<?php

use Src\Application;
use Src\View\View;

if (!function_exists('env')) {

    function env($key, $default = null)
    {
        return $_ENV[$key] ?? value($default);
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
    // dd($title, $view, $models);
    View::make($view, $title, $models);
}

function app()
{
    $app = null;
    if (!$app) {

        $app = new Application;
    }
    return $app;
}
