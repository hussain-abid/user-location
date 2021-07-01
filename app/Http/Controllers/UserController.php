<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function user()
    {
        $ip = '206.84.142.1'; //static ip
        //$ip = request()->ip(); //ip of the user which is currently visiting.
        $data = \Location::get($ip);
        return view('home',compact('data'));
    }
}
