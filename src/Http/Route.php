<?php

namespace Src\Http;

use Src\View\View;

class Route
{
    public static array $routes = [];

    public $request;

    public $responce;

    public function __construct(Request $request, Responce $responce)
    {
        $this->request = $request;
        $this->responce = $responce;
    }

    public static function get($route, $action)
    {
        self::$routes['get'][$route] = $action;
    }

    public static function post($route, $action)
    {
        self::$routes['post'][$route] = $action;
    }

    public function resolve()
    {
        $path = $this->request->path();
        $method = $this->request->method();
        $action = self::$routes[$method][$path] ?? false;

        if (!$action) {

            View::make(404, '404', [404, $path]);
        }

        // is_callable obyaektni ichida shunday method borligini tekshiradi
        if (is_callable($action)) {
            call_user_func_array($action, []);
        }

        if (is_array($action)) {
            
            call_user_func_array([new $action[0], $action[1]], []);
        }
    }
}
