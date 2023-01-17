<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
public function index()
{
    return view('home');
}
public function login(){
    return view('login');
}
public function submit(Request $request) //$request is object of class Request 

{
    echo "<pre>";
    print_r($request->all()) ;
    
}
}
