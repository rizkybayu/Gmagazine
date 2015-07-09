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

//Route::get('/', function () {
//    return view('index');
//});
//
//Route::get('/artikel', function(){
//   return view('artikel');
//});

//user interface
Route::get('/','GameController@index');
Route::get('/artikel','GameController@lihatArtikel');
Route::get('/lihat','GameController@lihat');

//admin
Route::get('/mimin','AdminController@login');
Route::get('/dash','AdminController@index');
Route::get('/tambahartikel','AdminController@tambah');