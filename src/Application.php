<?php

namespace Src;

use Src\Http\Request;
use Src\Http\Responce;
use Src\Http\Route;

class Application
{
    protected $route;
    protected $request;
    protected $responce;

    public function __construct()
    {
        $this->request = new Request;
        $this->responce = new Responce;
        $this->route = new Route($this->request, $this->responce);
    }

    public function run()
    {
        return $this->route->resolve();
    }
}
