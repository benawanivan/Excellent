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
Route::get('/testimoni', 'App\Http\Controllers\PagesController@testimoni');
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
	Route::post('admin/logout','App\Http\Controllers\Auth\AdminAuthController@postAdminLogout')->name('admin.logout');
});

Route::middleware('auth:guru')->group(function(){
	Route::get('guru/jadwal','App\Http\Controllers\GuruController@viewJadwal')->name('guru.jadwal');
	Route::get('guru/editprofile','App\Http\Controllers\GuruController@editProfile')->name('guru.profil');
	Route::get('guru/database','App\Http\Controllers\GuruController@viewSoal')->name('guru.soal');
	Route::put('guru/updateProfile','App\Http\Controllers\GuruController@updateProfile')->name('guru.updateProfile');
	Route::post('guru/logout','App\Http\Controllers\Auth\GuruAuthController@postGuruLogout')->name('guru.logout');
});

Route::middleware('auth:murid')->group(function(){
	Route::get('murid/jadwal','App\Http\Controllers\MuridController@viewJadwal')->name('murid.jadwal');
	Route::get('murid/profile','App\Http\Controllers\MuridController@viewProfile')->name('murid.profile');
	Route::get('murid/database','App\Http\Controllers\MuridController@viewSoal')->name('murid.soal');
	Route::get('murid/database/tambah','App\Http\Controllers\MuridController@addSoal')->name('murid.addSoal');
	Route::post('murid/database/tambah','App\Http\Controllers\SoalController@store')->name('murid.storeSoal');
	Route::post('murid/database/download','App\Http\Controllers\SoalController@download')->name('murid.downloadSoal');
	Route::put('murid/updateProfile','App\Http\Controllers\MuridController@updateProfile')->name('murid.updateProfile');
	Route::post('murid/logout','App\Http\Controllers\Auth\MuridAuthController@postMuridLogout')->name('murid.logout');
	
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

