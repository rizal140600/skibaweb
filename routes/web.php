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
use Cornford\Googlmapper\Facades\MapperFacade;

Route::get('/', 'Frontend\IndexController@index');

Route::get('/masuk', 'AuthController@login')->name('masuk');
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/logout', 'AuthController@logout');

Route::group(['middleware' => ['auth','checkRole:admin']], function () {

  Route::get('/user','UserController@index');
  Route::post('/user/create','UserController@create');
  
  
});

Route::group(['middleware' => ['auth', 'checkRole:admin,guru']], function () {
  
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
  
  Route::get('/backend/jurusan', 'JurusanController@index');
  Route::post('/backend/jurusan/create', 'JurusanController@create');
  Route::get('/backend/jurusan/{id}/edit', 'JurusanController@edit');
  Route::post('/backend/jurusan/{id}/update', 'JurusanController@update');
  Route::get('/backend/jurusan/{id}/delete', 'JurusanController@delete');

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
  Route::get('/backend/profil/struktur', 'StrukturController@index');
  Route::post('/backend/profil/struktur/{id}/update', 'StrukturController@update');
  Route::post('/backend/profil/struktur/create', 'StrukturController@create');
  
  Route::get('/backend/saran', 'SaranController@index');
  Route::get('/backend/saran/{id}/lihat', 'SaranController@lihat');
  Route::get('/backend/saran/{id}/delete', 'SaranController@delete');
  
});
Route::get('/guru', 'Frontend\GuruController@index');
Route::get('/guru/detail/{id}', 'Frontend\GuruController@detail');
Route::get('/guru/status', 'Frontend\GuruController@status');
Route::get('/guru/pendidikan', 'Frontend\GuruController@pendidikan');
Route::get('/guru/studi', 'Frontend\StudiController@studi');
Route::get('/pembelajaran', 'Frontend\PembelajaranController@pembelajaran');
Route::get('/profil/sambutan', 'Frontend\ProfilController@sambutan');
Route::get('/profil/tentang', 'Frontend\ProfilController@tentang');
Route::get('/profil/misi', 'Frontend\ProfilController@misi');
Route::get('/profil/identitas', 'Frontend\ProfilController@identitas');
Route::get('/profil/identitas', 'Frontend\ProfilController@identitas');
Route::get('/profil/organisasi', 'Frontend\ProfilController@organisasi');
Route::get('/profil/sarana', 'Frontend\ProfilController@sarana');
Route::get('/pengumuman', 'Frontend\PengumumanController@pengumuman');
Route::get('/pengumuman/detail/{id}', 'Frontend\PengumumanController@detail');
Route::get('/galeri/kegiatan', 'Frontend\GaleriController@kegiatan');
Route::get('/galeri/prestasi', 'Frontend\GaleriController@prestasi');
Route::get('/kontak', 'Frontend\KontakController@kontak');
Route::post('/kontak/create', 'Frontend\KontakController@create');
Route::get('/kegiatan', 'Frontend\KegiatanController@kegiatan');
Route::get('/kegiatan/detail/{id}', 'Frontend\KegiatanController@detail');
Route::get('/jurusan', 'Frontend\JurusanController@jurusan');
Route::get('/jurusan/{id}', 'Frontend\JurusanController@detail');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
