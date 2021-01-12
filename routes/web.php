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



Route::get('admin/login', 'App\Http\Controllers\Auth\AdminAuthController@getAdminLogin')->name('admin.login');
Route::post('admin/login', 'App\Http\Controllers\Auth\AdminAuthController@postAdminLogin');

Route::get('guru/login', 'App\Http\Controllers\Auth\GuruAuthController@getGuruLogin')->name('guru.login');
Route::post('guru/login', 'App\Http\Controllers\Auth\GuruAuthController@postGuruLogin');

Route::get('murid/login', 'App\Http\Controllers\Auth\MuridAuthController@getMuridLogin')->name('murid.login');
Route::post('murid/login', 'App\Http\Controllers\Auth\MuridAuthController@postMuridLogin');

Route::get('ortu/login', 'App\Http\Controllers\Auth\OrtuAuthController@getOrtuLogin')->name('ortu.login');
Route::post('ortu/login', 'App\Http\Controllers\Auth\OrtuAuthController@postOrtuLogin');

Route::middleware('auth:admin')->group(function(){
	Route::get('dashboard','App\Http\Controllers\AdminController@viewDashboard')->name('admin.dashboard');
});

Route::middleware('auth:guru')->group(function(){
	Route::get('guru/jadwal','App\Http\Controllers\GuruController@viewJadwal')->name('guru.jadwal');
});

Route::middleware('auth:murid')->group(function(){
	Route::get('murid/jadwal','App\Http\Controllers\MuridController@viewJadwal')->name('murid.jadwal');
	Route::post('murid/logout','App\Http\Controllers\Auth\MuridAuthController@postMuridLogout')->name('murid.logout');
});

Route::middleware('auth:ortu')->group(function(){
	Route::get('ortu/jadwal','App\Http\Controllers\OrtuController@viewJadwal')->name('ortu.jadwal');
});

