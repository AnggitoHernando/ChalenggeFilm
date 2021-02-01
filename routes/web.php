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

Route::get('/','HalamanAwal@index')->name('halaman.awal');
Route::get('/tambah','FilmController@create')->name('tambah.film');
Route::post('/store','FilmController@store')->name('store.film');
Route::get('/list','FilmController@index')->name('list.film');
Route::get('/hapus/{id}','FilmController@destroy')->name('delete.film');
Route::get('/edit/{id}','FilmController@edit')->name('edit.film');
Route::post('/update/{id}','FilmController@update')->name('update.film');
Route::get('/tambahreview/{id}','ReviewController@create')->name('create.review');
Route::post('/storereview','ReviewController@store')->name('store.review');
Route::get('/semuareview/{id}','ReviewController@index')->name('all.review');

