<?php

namespace Src\View;

class View
{
    public $layout = 'main';

    public static function make($view, $title, array $models)
    {
        $instance = new self();
        ob_start();
        include '../views/' . $view . '.php';
        $content = ob_get_clean();
        include '../views/layouts/' . $instance->layout . '.php';
    }
}
