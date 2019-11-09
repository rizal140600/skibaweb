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

Route::get('/pengumuman', 'PengumumanController@index');
Route::post('/pengumuman/create', 'PengumumanController@create');
Route::get('/pengumuman/{id}/edit', 'PengumumanController@edit');
Route::post('/pengumuman/{id}/update', 'PengumumanController@update');
Route::get('/pengumuman/{id}/delete', 'PengumumanController@delete');

Route::get('/profil/sarana', 'SaranaController@index');
Route::post('/profil/sarana/create', 'SaranaController@create');
Route::get('/profil/sarana/{id}/edit', 'SaranaController@edit');
Route::post('/profil/sarana/{id}/update', 'SaranaController@update');
Route::get('/profil/sarana/{id}/delete', 'SaranaController@delete');

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
Route::post('/profil/kepala/create', 'KepalaController@create');

Route::get('/profil/tentang', 'TentangController@index');
Route::post('/profil/tentang/{id}/update', 'TentangController@update');
Route::post('/profil/tentang/create', 'TentangController@create');

Route::get('/profil/identitas', 'IdentitasController@index');
Route::post('/profil/identitas/{id}/update', 'IdentitasController@update');
Route::post('/profil/identitas/create', 'IdentitasController@create');

Route::get('/profil/misi', 'MisiController@index');
Route::post('/profil/misi/{id}/update', 'MisiController@update');
Route::post('/profil/misi/create', 'MisiController@create');

Route::get('/profil/struktur', 'StrukturController@index');
Route::post('/profil/struktur/{id}/update', 'StrukturController@update');
Route::post('/profil/struktur/create', 'StrukturController@create');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

