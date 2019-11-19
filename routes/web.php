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
    return view('welcome');
});

Auth::routes();

// Route::get('/home', 'HomeController@index');

Route::get('/home','ArtikelController@index')->name('home');

Route::get('/artikel/{slug}','ArtikelController@detail');

Route::get('/tambah-artikel','ArtikelController@linkOncreate');

Route::post('/buat-artikel','ArtikelController@store');

Route::post('/buat-komen','KomenController@create');

Route::get('/edit-artikel/{id}','ArtikelController@edit');

Route::post('/edit-artikel-sekarang','ArtikelController@update');