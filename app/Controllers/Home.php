<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        echo "Hola mundo desde CodeIgniter 4";
        return view('welcome_message');
    }

    public function code()
    {
        echo "Hola mundo desde CodeIgniter 4";
        
    }
}
