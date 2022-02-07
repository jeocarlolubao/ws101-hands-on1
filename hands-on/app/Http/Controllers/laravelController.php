<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class laravelController extends Controller
{
    //
    public function index(){
        $name = "Jeo Carlo Lubao";
        $age = "9999999999";
        $ismale = "True";
        

        $context = ["name"=> $name, "age" => $age, "ismale" => $ismale];
        
        return view('index', $context ); //return index.php
    }
}


