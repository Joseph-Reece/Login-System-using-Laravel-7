<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class addressController extends Controller
{
    //
    function address(Request $req)
    {
        return $req->input();
    }
}
