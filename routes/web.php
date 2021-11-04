<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    $data=[
        "nome"=>"Il Castello Errante di Howl",
        "regista"=>"Hayao Miyazaki",
        "dataDiUscita"=>2004
    ];
    return view('home',$data);
});
Route::get('/chi-siamo', function () {
    return view('chisiamo');
});
Route::get('/dove', function () {
    return view('doveandiamo');
});
