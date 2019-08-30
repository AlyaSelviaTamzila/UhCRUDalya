<?php

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
    // return view('welcome');
    echo "Selamat Datang Alya";
});

Route::get('/satu', function () {
    // return view('welcome');
    echo "satu satu";
});

Route::get('/dua', function () {
    // return view('welcome');
    echo "dua dua";
});

Route::get('/tiga', function () {
    // return view('welcome');
    echo "tiga tiga";
});

Route::get('/empat', function () {
    // return view('welcome');
    echo "empat empat";
});

Route::get('/lima', function () {
    // return view('welcome');
    echo "lima lima";
});

Route::get('/enam', function () {
    // return view('welcome');
    echo "enam enam";
});

Route::get('/tujuh', function () {
    // return view('welcome');
    echo "tujuh tujuh";
});

Route::get('/delapan', function () {
    // return view('welcome');
    echo "delapan lapan";
});

Route::get('/sembilan', function () {
    // return view('welcome');
    echo "sembilan bilan";
});

//1. echo langsung nested
Route::get('/sepuluh', function () {
    // return view('welcome');
    echo "sepuluh puluh";
  });

//2. manggil view
  Route::get('/hore', function () {
      return view('anggur');
      //lokasi view
    });

//3. memanggil controller
Route::get('/usang', 'usang@index');
/* file controller namanya UsangController
    nama url UsangController
    index nama functionnya
*/

Route::get('/luwe', 'usang@mangan');

Route::get('/mangga', 'mangga@manis');

Route::get('/template', function () {
    return view('template');
    //lokasi view
  });

  Route::get('/', 'kontrak@index');

Route::get('/CleaningService', 'CleanerController@index');

Route::resource('/kontak', 'kontak');

Route::resource('/satpam', 'satpam');

Route::resource('/kabupaten', 'kabupaten');

Route::resource('/penjualan', 'penjualan');

Route::resource('/pembelian', 'pembelian');

Route::resource('/barang', 'barang');

Route::get('/', function(){
  return view('index');
});
