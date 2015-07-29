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
Route::get('/cek','GameController@cek');
//user interface
Route::get('/','GameController@index');
Route::get('/artikel/{id}','GameController@lihatArtikel');
Route::get('/lihat','GameController@lihat');

//cari
Route::post('/cari','GameController@cari');

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

//eksport
Route::get('/pdf','AdminController@pdf');
Route::get('/excel','AdminController@excel');

//grouping


// Route::get('/mimin','AdminController@login'); //untuk login admin
 //dashboard admin
Route::get('/tambahartikel','AdminController@tambah'); //menu untuk tambah artikel admin
Route::get('/lihatartikel','AdminController@lihat'); //menu untuk melihat artikel
Route::get('/tambahadmin','AdminController@tambahadmin'); //menu untuk tambah admin
Route::get('/tambahkategori','AdminController@tambahkategori'); //menu untuk tambah kategori
Route::get('/ubahkategori','AdminController@ubahkategori'); //menuu untuk lihat kategori
Route::get('/lihatkategori','AdminController@lihatkategori'); //menuu untuk lihat kategori

//PROSES DI ADMIN
Route::post('/store','AdminController@store'); //UNTUK MENYIMPAN
Route::post('/tambah_kategori','AdminController@simpankategori'); //menyimpan kategori
Route::post('/tambah_admin','AdminController@tambah_admin'); //UNTUK MENYIMPAN
//Route::delete('/hapus/{id}','AdminController@hapus'); //menghapus
Route::get('/hapus/{id}','AdminController@hapus');

//edit artikel
Route::get('/edit/{id}','AdminController@edit'); //untuk mengambil id untuk mengubah
Route::put('/ubah/{id}','AdminController@ubah'); //proses ubah

//edit kategori
Route::get('/edit_kateg/{id}','AdminController@edit_kateg'); //untuk mengambil id untuk mengubah
Route::get('/hapus_kateg/{id}','AdminController@hapus_kateg'); //proses ubah
Route::put('/ubah_kateg/{id}','AdminController@ubah_kateg');