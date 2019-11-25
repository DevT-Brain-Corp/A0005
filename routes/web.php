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
<<<<<<< Updated upstream
    return view('welcome');
});

Auth::routes();

// Route::get('/home', 'HomeController@index');

Route::get('/home','ArtikelController@index')->name('home');

Route::get('/artikel/{slug}','ArtikelController@detail');
=======
    return view('home');
});

Route::get('/forum', function () {
    return view('forum');
});

Route::get('/tentang', function () {
    return view('tentang');
});

Route::get('/template', function () {
    return view('template');
});

Route::get('/header', function () {
    return view('header');
});

Route::get('/informasi', function () {
    return view('informasi');
});

Route::get('/dokter', function () {
    return view('dokter');
});

Route::get('/registrasi', function () {
    return view('registrasi');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/before', function () {
    return view('before');
});

Route::get('/data-artikel', function () {
    return view('data-artikel');
});

Route::get('/data-dokter', function () {
    return view('data-dokter');
});

Route::get('/data-forum', function () {
    return view('data-forum');
});

Route::get('/data-pengguna', function () {
    return view('data-pengguna');
});

Route::get('/tambah-pengguna', function () {
    return view('pengguna-form');
});

Route::get('/data-admin', function () {
    return view('data-admin');
});

Route::post('proses', 'LoginController@proses')->name('proses');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/register-dokter', 'DokterController@registerPage');

Route::post('/registrasi-dokter', 'DokterController@createDokter');

Route::get('/forum','ArtikelController@index');

Route::get('/forum/{slug}','ArtikelController@detail');
>>>>>>> Stashed changes

Route::get('/tambah-artikel','ArtikelController@linkOncreate');

Route::post('/buat-artikel','ArtikelController@store');

Route::post('/buat-komen','KomenController@create');

Route::get('/edit-artikel/{id}','ArtikelController@edit');

<<<<<<< Updated upstream
Route::post('/edit-artikel-sekarang','ArtikelController@update');
=======
Route::post('/edit-artikel-sekarang','ArtikelController@update');

Route::post('/hapus-artikel','ArtikelController@delete');
>>>>>>> Stashed changes
