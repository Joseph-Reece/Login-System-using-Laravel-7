<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cars extends Controller
{
    //
    function index()
    {
        return ['name' => 'Joseph Ndirangu'];
    }

    function show()
    {
        echo "Hellow World of Controller show";
    }
}
