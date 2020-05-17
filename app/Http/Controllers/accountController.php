<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\admin;

class accountController extends Controller
{
    //
    function save(Request $req)
    {
        // return $req->input();
        $user = new admin;
        $user->admin_id = $req->admin_id;
        $user->admin_name = $req->admin_name;
        $user->admin_address = $req->admin_address;
        $user->admin_dob = $req->admin_dob;
        $user->admin_phn = $req->admin_phn;
        $user->admin_mail = $req->admin_mail;
        $user->admin_pswd = $req->admin_pass;

        $user->save();

        return view('login');
    }

   
}
