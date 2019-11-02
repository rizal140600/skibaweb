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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

