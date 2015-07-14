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


//testing 
Route::get('/hmm','AdminController@hmm');
//user interface
Route::get('/','GameController@index');
Route::get('/artikel/{id}','GameController@lihatArtikel');
Route::get('/lihat','GameController@lihat');

// //adminlogin 
/*Route::get('auth/login', 'AuthController@getLogin');
Route::post('auth/login', 'AuthController@postLogin');
Route::get('auth/logout', 'AuthController@getLogout');*/

//login admin
Route::controllers([
  'auth' => 'Auth\AuthController',
  'password' => 'Auth\PasswordController',
]);

Route::group(['prefix' => 'gm-admin', 'middleware' => 'auth'], function()
{
	Route::get('/index','AdminController@index');
});


// Route::get('/mimin','AdminController@login'); //untuk login admin
 //dashboard admin
Route::get('/tambahartikel','AdminController@tambah'); //menu untuk tambah artikel admin
Route::get('/lihatartikel','AdminController@lihat'); //menu untuk melihat artikel
Route::get('/tambahadmin','AdminController@tambahadmin'); //menu untuk tambah admin

//PROSES DI ADMIN
Route::post('/store','AdminController@store'); //UNTUK MENYIMPAN
Route::post('/tambah_admin','AdminController@tambah_admin'); //UNTUK MENYIMPAN
//Route::delete('/hapus/{id}','AdminController@hapus'); //menghapus
Route::get('/hapus/{id}','AdminController@hapus');

Route::get('/edit/{id}','AdminController@edit'); //untuk mengambil id untuk mengubah
Route::put('/ubah/{id}','AdminController@ubah'); //proses ubah