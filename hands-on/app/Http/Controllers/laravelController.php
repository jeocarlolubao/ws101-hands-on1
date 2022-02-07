<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class laravelController extends Controller
{
    //
    public function index(){
        $name = "WS101";
        
        
        return view('index', ["name"=> $name] ); //return index.php
    }
}


