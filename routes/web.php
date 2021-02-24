<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\MuridController;
use App\Http\Controllers\OrtuController;

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
    return view('landing');
})->name('landing');
Route::get('/reguler', 'App\Http\Controllers\PagesController@reguler');
Route::get('/platinum', 'App\Http\Controllers\PagesController@platinum');
Route::get('/tanyapr', 'App\Http\Controllers\PagesController@tanyapr');
Route::get('/profil', 'App\Http\Controllers\PagesController@profil');
Route::get('/lokasi', 'App\Http\Controllers\PagesController@lokasi');
Route::get('/keunggulan', 'App\Http\Controllers\PagesController@keunggulan');
Route::get('/prestasi', 'App\Http\Controllers\PagesController@prestasi');

Route::get('admin/login', 'App\Http\Controllers\Auth\AdminAuthController@getAdminLogin')->name('admin.login');
Route::post('admin/login', 'App\Http\Controllers\Auth\AdminAuthController@postAdminLogin');

Route::get('guru/login', 'App\Http\Controllers\Auth\GuruAuthController@getGuruLogin')->name('guru.login');
Route::post('guru/login', 'App\Http\Controllers\Auth\GuruAuthController@postGuruLogin');

Route::get('murid/login', 'App\Http\Controllers\Auth\MuridAuthController@getMuridLogin')->name('murid.login');
Route::post('murid/login', 'App\Http\Controllers\Auth\MuridAuthController@postMuridLogin');

Route::get('ortu/login', 'App\Http\Controllers\Auth\OrtuAuthController@getOrtuLogin')->name('ortu.login');
Route::post('ortu/login', 'App\Http\Controllers\Auth\OrtuAuthController@postOrtuLogin');

Route::middleware('auth:admin')->group(function(){
	Route::get('admin/dashboard','App\Http\Controllers\AdminController@viewDashboard')->name('admin.dashboard');
	Route::get('admin/soal','App\Http\Controllers\AdminController@viewSoal')->name('admin.soal');
	Route::get('admin/soal/search','App\Http\Controllers\AdminController@searchSoal')->name('admin.searchSoal');
	Route::get('admin/soal/tambah','App\Http\Controllers\AdminController@addSoal')->name('admin.addSoal');
	Route::get('admin/soal/backup','App\Http\Controllers\SoalController@backupSoal')->name('admin.backupSoal');
	Route::post('admin/soal/deleteAll','App\Http\Controllers\SoalController@deleteAllSoal')->name('admin.deleteAllSoal');
	Route::post('admin/soal/delete','App\Http\Controllers\SoalController@deleteSoal')->name('admin.deleteSoal');
	Route::post('admin/soal/download','App\Http\Controllers\SoalController@download')->name('admin.downloadSoal');
	Route::post('admin/soal/tambah','App\Http\Controllers\SoalController@store')->name('admin.storeSoal');
	
	Route::get('admin/datamurid','App\Http\Controllers\AdminController@viewDataMurid')->name('admin.dataMurid');
	Route::get('admin/datamurid/search','App\Http\Controllers\AdminController@searchMurid')->name('admin.searchMurid');
	Route::get('admin/datamurid/tambah','App\Http\Controllers\AdminController@addMurid')->name('admin.addMurid');
	Route::post('admin/datamurid/tambah','App\Http\Controllers\MuridController@store')->name('admin.storeMurid');
	Route::get('admin/datamurid/edit/','App\Http\Controllers\AdminController@editMurid')->name('admin.editMurid');
	Route::post('admin/datamurid/edit/','App\Http\Controllers\MuridController@edit');
	Route::delete('admin/datamurid/{datamurid}','App\Http\Controllers\MuridController@delete')->name('admin.deleteMurid');

	Route::get('admin/dataguru','App\Http\Controllers\AdminController@viewDataGuru')->name('admin.dataGuru');
	Route::get('admin/dataguru/search','App\Http\Controllers\AdminController@searchGuru')->name('admin.searchGuru');
	Route::get('admin/dataguru/tambah','App\Http\Controllers\AdminController@addGuru')->name('admin.addGuru');
	Route::post('admin/dataguru/tambah','App\Http\Controllers\GuruController@store')->name('admin.storeGuru');
	Route::get('admin/dataguru/edit/','App\Http\Controllers\AdminController@editGuru')->name('admin.editGuru');
	Route::post('admin/dataguru/edit/','App\Http\Controllers\GuruController@edit');
	Route::delete('admin/dataguru/{dataguru}','App\Http\Controllers\GuruController@delete')->name('admin.deleteGuru');

	Route::get('admin/datacabang','App\Http\Controllers\AdminController@viewDataCabang')->name('admin.dataCabang');
	Route::get('admin/datacabang/search','App\Http\Controllers\AdminController@searchCabang')->name('admin.searchCabang');
	Route::get('admin/datacabang/tambah','App\Http\Controllers\AdminController@addCabang')->name('admin.addCabang');
	Route::post('admin/datacabang/tambah','App\Http\Controllers\CabangController@store')->name('admin.storeCabang');
	Route::get('admin/datacabang/edit/','App\Http\Controllers\AdminController@editCabang')->name('admin.editCabang');
	Route::post('admin/datacabang/edit/','App\Http\Controllers\CabangController@edit');
	Route::delete('admin/datacabang/{datacabang}','App\Http\Controllers\CabangController@delete')->name('admin.deleteCabang');
	
	Route::get('admin/datamapel','App\Http\Controllers\AdminController@viewDataMapel')->name('admin.dataMapel');
	Route::get('admin/datamapel/search','App\Http\Controllers\AdminController@searchMapel')->name('admin.searchMapel');
	Route::get('admin/datamapel/tambah','App\Http\Controllers\AdminController@addMapel')->name('admin.addMapel');
	Route::post('admin/datamapel/tambah','App\Http\Controllers\MapelController@store')->name('admin.storeMapel');
	Route::get('admin/datamapel/edit/','App\Http\Controllers\AdminController@editMapel')->name('admin.editMapel');
	Route::post('admin/datamapel/edit/','App\Http\Controllers\MapelController@edit');
	Route::delete('admin/datamapel/{datamapel}','App\Http\Controllers\MapelController@delete')->name('admin.deleteMapel');
	
	Route::post('admin/logout','App\Http\Controllers\Auth\AdminAuthController@postAdminLogout')->name('admin.logout');
});

Route::middleware('auth:guru')->group(function(){
	Route::get('guru/jadwal','App\Http\Controllers\GuruController@viewJadwal')->name('guru.jadwal');
	Route::get('guru/editprofile','App\Http\Controllers\GuruController@editProfile')->name('guru.profil');
	Route::get('guru/database','App\Http\Controllers\GuruController@viewSoal')->name('guru.soal');
	Route::get('guru/database/search','App\Http\Controllers\GuruController@searchSoal')->name('guru.searchSoal');
	Route::get('guru/database/tambah','App\Http\Controllers\GuruController@addSoal')->name('guru.addSoal');
	Route::post('guru/database/tambah','App\Http\Controllers\SoalController@store')->name('guru.storeSoal');
	Route::post('guru/database/download','App\Http\Controllers\SoalController@download')->name('guru.downloadSoal');
	Route::get('guru/tryout','App\Http\Controllers\GuruController@viewTryout')->name('guru.tryout');
	Route::get('guru/tryout/search','App\Http\Controllers\GuruController@searchTryout')->name('guru.searchTryout');
	Route::get('guru/tryout/tambah','App\Http\Controllers\GuruController@addTryout')->name('guru.addTryout');
	Route::post('guru/tryout/tambah','App\Http\Controllers\TryoutController@store')->name('guru.storeTryout');
	Route::put('guru/updateProfile','App\Http\Controllers\GuruController@updateProfile')->name('guru.updateProfile');
	Route::put('guru/updateLink','App\Http\Controllers\GuruController@updateLink')->name('guru.updateLink');
	Route::delete('guru/tryout/{tryout}','App\Http\Controllers\TryoutController@delete')->name('guru.deleteTryout');
	Route::post('guru/logout','App\Http\Controllers\Auth\GuruAuthController@postGuruLogout')->name('guru.logout');
});

Route::middleware('auth:murid')->group(function(){
	Route::get('murid/jadwal','App\Http\Controllers\MuridController@viewJadwal')->name('murid.jadwal');
	Route::post('murid/jadwal/detail','App\Http\Controllers\MuridController@viewJadwalDetail')->name('murid.jadwalDetail');
	Route::get('murid/jadwal/tambah','App\Http\Controllers\MuridController@addJadwal')->name('murid.addJadwal');
	Route::post('murid/jadwal/tambah','App\Http\Controllers\JadwalController@store')->name('murid.storeJadwal');
	Route::get('murid/jadwal/edit','App\Http\Controllers\MuridController@editJadwal')->name('murid.editJadwal');
	Route::post('murid/jadwal/edit','App\Http\Controllers\JadwalController@edit');
	Route::get('murid/profile','App\Http\Controllers\MuridController@viewProfile')->name('murid.profile');
	Route::get('murid/database','App\Http\Controllers\MuridController@viewSoal')->name('murid.soal');
	Route::get('murid/database/search','App\Http\Controllers\MuridController@searchSoal')->name('murid.searchSoal');
	Route::get('murid/database/tambah','App\Http\Controllers\MuridController@addSoal')->name('murid.addSoal');
	Route::post('murid/database/tambah','App\Http\Controllers\SoalController@store')->name('murid.storeSoal');
	Route::post('murid/database/download','App\Http\Controllers\SoalController@download')->name('murid.downloadSoal');
	Route::put('murid/updateProfile','App\Http\Controllers\MuridController@updateProfile')->name('murid.updateProfile');
	Route::post('murid/logout','App\Http\Controllers\Auth\MuridAuthController@postMuridLogout')->name('murid.logout');
	
	Route::get('murid/tryout','App\Http\Controllers\MuridController@viewTryout')->name('murid.tryout');
	Route::get('murid/tryout/search','App\Http\Controllers\MuridController@searchTryout')->name('murid.searchTryout');

	Route::get('murid/nonaktif','App\Http\Controllers\MuridController@viewNonaktif')->name('murid.nonaktif');
	
});

Route::middleware('auth:ortu')->group(function(){
	Route::get('ortu/jadwal','App\Http\Controllers\OrtuController@viewJadwal')->name('ortu.jadwal');
	Route::get('ortu/laporan','App\Http\Controllers\OrtuController@viewLaporan')->name('ortu.laporan');
	Route::get('ortu/editprofile','App\Http\Controllers\OrtuController@editProfile')->name('ortu.profil');
	Route::put('ortu/updateProfile','App\Http\Controllers\OrtuController@updateProfile')->name('ortu.updateProfile');
	Route::post('ortu/logout','App\Http\Controllers\Auth\OrtuAuthController@postOrtuLogout')->name('ortu.logout');
});


// Route::get('dashboard','App\Http\Controllers\AdminController@getdashboard');
// Auth::routes();
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

