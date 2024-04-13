<?php

namespace App\Controllers;

use Src\View\View;

class HomeController
{
    public function index()
    {
        $models = [
            ['name' => 'admin'],
            ['name' => 'user'],
            ['name' => 'moderator'],
            ['name' => 'manager'],
            ['name' => 'test'],
        ];

        return view('index', 'Bosh saxifa', ['models' => $models]);
    }


    public function about()
    {
        return view('about', 'About saxifa');
    }

    public function contact()
    {
        return view('contact', 'Contact saxifa');
    }

    public function servis()
    {
        return view('servis', 'Servis saxifa');
    }
}
