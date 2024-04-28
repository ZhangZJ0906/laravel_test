<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function index(){
        //執行這個function 時將會返回 Helloworld Blade
        return view('index');
    }
}
