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

Route::get('/dashboard','AdminController@dashboard');
Route::get('/pembelajaran', 'PembelajaranController@index');
Route::post('/pembelajaran/create', 'PembelajaranController@create');
Route::get('/pembelajaran/{id}/edit', 'PembelajaranController@edit');
Route::post('/pembelajaran/{id}/update', 'PembelajaranController@update');
Route::get('/pembelajaran/{id}/delete', 'PembelajaranController@delete');

Route::get('/guru', 'GuruController@index');
Route::post('/guru/create', 'GuruController@create');
Route::get('/guru/{id}/edit', 'GuruController@edit');
Route::post('/guru/{id}/update', 'GuruController@update');
Route::get('/guru/{id}/delete', 'GuruController@delete');

Route::get('/guru/pendidikan', 'PendidikanController@index');
Route::post('/guru/pendidikan/create', 'PendidikanController@create');
Route::get('/guru/pendidikan/{id}/edit', 'PendidikanController@edit');
Route::post('/guru/pendidikan/{id}/update', 'PendidikanController@update');
Route::get('/guru/pendidikan/{id}/delete', 'PendidikanController@delete');

Route::get('/studi', 'StudiController@index');
Route::post('/studi/create', 'StudiController@create');
Route::get('/studi/{id}/edit', 'StudiController@edit');
Route::post('/studi/{id}/update', 'StudiController@update');
Route::get('/studi/{id}/delete', 'StudiController@delete');

Route::get('/profil/kepala', 'KepalaController@index');
Route::post('/profil/kepala/{id}/update', 'KepalaController@update');

Route::get('/profil/tentang', 'TentangController@index');
Route::post('/profil/tentang/{id}/update', 'TentangController@update');

Route::get('/profil/misi', 'MisiController@index');
Route::post('/profil/misi/{id}/update', 'MisiController@update');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

