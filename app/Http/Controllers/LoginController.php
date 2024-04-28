<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
        //執行這個function 時將會返回 Helloworld Blade
        return view('login');
    }
}
