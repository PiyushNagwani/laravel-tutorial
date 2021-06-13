<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sessioncontroller extends Controller
{
    function index(request $req)
    {
        $data=$req->input('username');
       $req->session()->put('username',$data);
       //session(['username' => $data]);
        return redirect('profile');
    }
}
