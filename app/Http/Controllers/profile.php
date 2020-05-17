<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use App\admin;

class profile extends Controller
{
    //
    function index()
    {
        return admin::where('admin_name', 'Admin')->get();
    }
}
