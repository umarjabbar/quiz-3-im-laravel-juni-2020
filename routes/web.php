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

Route::get('/artikel', 'ArtikelController@index'); // menampilkan semua (done)
Route::get('/artikel/create', 'ArtikelController@create'); // menampilkan halaman form (done)
Route::get('/artikel/{id}', 'ArtikelController@show'); // menampilkan detail item dengan id 
Route::get('/artikel/{id}/edit', 'ArtikelController@edit'); // menampilkan form untuk edit item
Route::post('/artikel', 'ArtikelController@store'); // menyimpan data
Route::put('/artikel/{id}', 'ArtikelController@update'); // menyimpan perubahan dari form edit
Route::delete('/artikel/{id}', 'ArtikelController@destroy'); // menghapus data dengan id