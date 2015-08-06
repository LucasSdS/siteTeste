<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
require_once __DIR__.'/routes/admin.php';

Route::get('/', function () {
    return view('home');
});

Route::get('contato', function () {
    return view('contato');
});

Route::get('irado', function () {
    return view('maneiro');
});

Route::get('testes', function () {
    return view('macho');
});