<?php
Use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
// Route::get('/',function(){
// return view('home');
// });
// Route::get('/about',function(){
//     return view('about');
//     });
    Route::get('/user',[DemoController:: class,'index']);
    Route::get('/login',[DemoController:: class,'login']);
    Route::post('/login',[DemoController:: class,'submit']);