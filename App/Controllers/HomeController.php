<?php

namespace App\Controllers;

use App\Models\User;
use Src\Support\Hash;
use Src\View\View;

class HomeController
{
    public function index()
    {
        return view('index', 'Bosh saxifa');
    }

    public function about()
    {
        $models = User::where('tel', '=', '+998941050405');

        return view('about', 'About saxifa', $models);
    }

    public function contact()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            dd($_FILES['rasm'], $_POST);
        }
        return view('contact', 'Contact saxifa');
    }

    public function servis()
    {
        return view('servis', 'Servis saxifa');
    }
}
