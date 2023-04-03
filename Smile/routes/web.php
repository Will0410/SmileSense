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
    
    $nome =  "William";
    $idade = 17;
    $profissao = "Programador";

    return view('welcome', ['nome' => $nome,'idade' => $idade,'profissao'  => $profissao]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/buy', function () {
    return view('buy');
});
    
