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
Route::get('/artikel/{id}','GameController@lihatArtikel');
Route::get('/lihat','GameController@lihat');

//admin
Route::get('/mimin','AdminController@login'); //untuk login admin
Route::get('/dash','AdminController@index'); //dashboard admin
Route::get('/tambahartikel','AdminController@tambah'); //menu untuk tambah artikel admin
Route::get('/lihatartikel','AdminController@lihat'); //menu untuk melihat artikel
Route::get('/tambahadmin','AdminController@tambahadmin'); //menu untuk tambah admin
Route::post('/store','AdminController@store');