<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function HalamanLogin(){
        return view('Login');
    }

    public function HalamanUtama(){
        return view('HalamanUtama');
    }
}
