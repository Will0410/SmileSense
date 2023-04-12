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
    $arr = [1,2,3,4,5];

    return view('welcome', 
    ['nome' => $nome,
    'idade' => $idade,
    'profissao'  => $profissao,
    'arr' => $arr    ]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/buy', function () {
    return view('buy');
});

Route::get('/login', function () {
    return view('Pagin_logpac');
});

    
