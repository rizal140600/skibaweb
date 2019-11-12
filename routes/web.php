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

Route::get('/', 'Frontend\IndexController@index');

Route::get('/dashboard','AdminController@dashboard');

Route::get('/backend/pembelajaran', 'PembelajaranController@index');
Route::post('/backend/pembelajaran/create', 'PembelajaranController@create');
Route::get('/backend/pembelajaran/{id}/edit', 'PembelajaranController@edit');
Route::post('/backend/pembelajaran/{id}/update', 'PembelajaranController@update');
Route::get('/backend/pembelajaran/{id}/delete', 'PembelajaranController@delete');

Route::get('/backend/pengumuman', 'PengumumanController@index');
Route::post('/backend/pengumuman/create', 'PengumumanController@create');
Route::get('/backend/pengumuman/{id}/edit', 'PengumumanController@edit');
Route::post('/backend/pengumuman/{id}/update', 'PengumumanController@update');
Route::get('/backend/pengumuman/{id}/delete', 'PengumumanController@delete');

Route::get('/backend/kegiatan', 'KegiatanController@index');
Route::post('/backend/kegiatan/create', 'KegiatanController@create');
Route::get('/backend/kegiatan/{id}/edit', 'KegiatanController@edit');
Route::post('/backend/kegiatan/{id}/update', 'KegiatanController@update');
Route::get('/backend/kegiatan/{id}/delete', 'KegiatanController@delete');

Route::get('/backend/galeri', 'GaleriController@index');
Route::post('/backend/galeri/create', 'GaleriController@create');
Route::get('/backend/galeri/{id}/edit', 'GaleriController@edit');
Route::post('/backend/galeri/{id}/update', 'GaleriController@update');
Route::get('/backend/galeri/{id}/delete', 'GaleriController@delete');

Route::get('/backend/profil/sarana', 'SaranaController@index');
Route::post('/backend/profil/sarana/create', 'SaranaController@create');
Route::get('/backend/profil/sarana/{id}/edit', 'SaranaController@edit');
Route::post('/backend/profil/sarana/{id}/update', 'SaranaController@update');
Route::get('/backend/profil/sarana/{id}/delete', 'SaranaController@delete');

Route::get('/backend/guru', 'GuruController@index');
Route::post('/backend/guru/create', 'GuruController@create');
Route::get('/backend/guru/{id}/edit', 'GuruController@edit');
Route::post('/backend/guru/{id}/update', 'GuruController@update');
Route::get('/backend/guru/{id}/delete', 'GuruController@delete');

Route::get('/backend/guru/pendidikan', 'PendidikanController@index');
Route::post('/backend/guru/pendidikan/create', 'PendidikanController@create');
Route::get('/backend/guru/pendidikan/{id}/edit', 'PendidikanController@edit');
Route::post('/backend/guru/pendidikan/{id}/update', 'PendidikanController@update');
Route::get('/backend/guru/pendidikan/{id}/delete', 'PendidikanController@delete');

Route::get('/backend/guru/status', 'StatusController@index');
Route::post('/backend/guru/status/create', 'StatusController@create');
Route::get('/backend/guru/status/{id}/edit', 'StatusController@edit');
Route::post('/backend/guru/status/{id}/update', 'StatusController@update');
Route::get('/backend/guru/status/{id}/delete', 'StatusController@delete');

Route::get('/backend/studi', 'StudiController@index');
Route::post('/backend/studi/create', 'StudiController@create');
Route::get('/backend/studi/{id}/edit', 'StudiController@edit');
Route::post('/backend/studi/{id}/update', 'StudiController@update');
Route::get('/backend/studi/{id}/delete', 'StudiController@delete');

Route::get('/backend/profil/kepala', 'KepalaController@index');
Route::post('/backend/profil/kepala/{id}/update', 'KepalaController@update');
Route::post('/backend/profil/kepala/create', 'KepalaController@create');

Route::get('/backend/profil/tentang', 'TentangController@index');
Route::post('/backend/profil/tentang/{id}/update', 'TentangController@update');
Route::post('/backend/profil/tentang/create', 'TentangController@create');

Route::get('/backend/profil/identitas', 'IdentitasController@index');
Route::post('/backend/profil/identitas/{id}/update', 'IdentitasController@update');
Route::post('/backend/profil/identitas/create', 'IdentitasController@create');

Route::get('/backend/profil/misi', 'MisiController@index');
Route::post('/backend/profil/misi/{id}/update', 'MisiController@update');
Route::post('/backend/profil/misi/create', 'MisiController@create');

Route::group(['middleware' => 'App\Http\Middleware\SuperAdminMiddleware'], function()
{
  Route::get('/backend/profil/struktur', 'StrukturController@index');
  Route::post('/backend/profil/struktur/{id}/update', 'StrukturController@update');
  Route::post('/backend/profil/struktur/create', 'StrukturController@create');
});

Route::get('/home_user', 'User@index');
Route::get('/login', 'User@login');
Route::post('/dashboard', 'User@loginPost');
Route::get('/register', 'User@register');
Route::post('/registerPost', 'User@registerPost');
Route::get('/logout', 'User@logout');

Route::get('/guru', 'Frontend\GuruController@index');
