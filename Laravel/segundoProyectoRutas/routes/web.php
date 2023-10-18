<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/colombia',function(){
    return view('paises.colombia');
});

Route::get('/peru',function(){
    return view('paises.peru');
});

Route::get('/bolivia',function(){
    return view('paises.bolivia');
});

Route::get('/mexico',function(){
    return view('paises.mexico');
});

Route::get('/brasil',function(){
    return view('paises.brasil');
});