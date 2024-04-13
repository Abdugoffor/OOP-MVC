<?php

namespace Src\Http;

class Request
{
    public static function method()
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }

    public static function path()
    {
        $path = $_SERVER['REQUEST_URI'] ?? '/';
        return str_contains($path, '?') ? explode('?', $path)[0] : $path;
    }

}
