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

Route::get('/kegiatan', 'KegiatanController@index');
Route::post('/kegiatan/create', 'KegiatanController@create');
Route::get('/kegiatan/{id}/edit', 'KegiatanController@edit');
Route::post('/kegiatan/{id}/update', 'KegiatanController@update');
Route::get('/kegiatan/{id}/delete', 'KegiatanController@delete');

Route::get('/galeri', 'GaleriController@index');
Route::post('/galeri/create', 'GaleriController@create');
Route::get('/galeri/{id}/edit', 'GaleriController@edit');
Route::post('/galeri/{id}/update', 'GaleriController@update');
Route::get('/galeri/{id}/delete', 'GaleriController@delete');

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

Route::get('/guru/status', 'StatusController@index');
Route::post('/guru/status/create', 'StatusController@create');
Route::get('/guru/status/{id}/edit', 'StatusController@edit');
Route::post('/guru/status/{id}/update', 'StatusController@update');
Route::get('/guru/status/{id}/delete', 'StatusController@delete');

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

Route::get('/dashboard', 'HomeController@index')->name('home');

