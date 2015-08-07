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

//cara pemesanan 
Route::get('/cara','GameController@cara');


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

//TRANSAKSI
Route::get('/beli','TransaksiController@index'); // menampilkan menu beli
Route::get('/tambahgame','TransaksiController@tambahGame');// untuk melihat view tambah game
Route::post('/tambah_game','TransaksiController@simpanGame'); // untuk melakukan proses simpan game
Route::get('/listgame','TransaksiController@lihatGame'); //untuk melihat list game
Route::get('/hapusGame/{id}','TransaksiController@hapusGame'); //untuk menghapus game
Route::get('/editGame/{id}','TransaksiController@editGame'); //untuk memunculkan view edit game
Route::put('/edit_game/{id}','TransaksiController@edit_game'); //proses edit game

Route::get('/transaksi/{id}','TransaksiController@transaksiView'); //view transaksi
Route::post('/transaksi_simpan/{id}','TransaksiController@transaksiSimpan'); //proses save transaksi
//batal dan mengembalikan stok
Route::get('/cancel/{id}','TransaksiController@cancel'); //cancel dan mengembalikan stok
Route::get('/cancel2/{id}','TransaksiController@cancel2');

//melihat proses transaksi
Route::get('/pending','TransaksiController@lihatPending'); //melihat daftar transaksi yang pending
Route::get('/approve','TransaksiController@lihatApprove'); //melihat daftar transaksi yang sudah di approve

//eksport transaksi
Route::get('/pdfTransPen','TransaksiController@pdfPen'); // 1st progegses !
Route::get('/excelTransPen','TransaksiController@excelPen'); // NOT PROGRESS !

//ganti status
Route::get('/GantiStatus/{id}','TransaksiController@GantiStatus'); //GANTI STATUS
Route::get('/GantiStatusApp/{id}','TransaksiController@GantiStatusApp'); //GANTI STATUS

Route::get('/pdfTransApp','TransaksiController@pdfApp'); // NOT PROGRES !
Route::get('/excelTransApp','TransaksiController@excelApp'); // NOT PROGRESS !

//untuk laporan
Route::get('/viewport','AdminController@viewPort'); //untuk menu awal view
Route::post('/report','AdminController@report');//untuk proses report

//UNTUK TESTING 
Route::get('/test','TransaksiController@test'); // KHUSUS UNTUK TESTING
//CHECK OUT
Route::get('/chek','TransaksiController@check'); // untuk cek