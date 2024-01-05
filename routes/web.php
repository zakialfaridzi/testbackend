<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\DivisiController;
use App\Http\Controllers\SendEmailController;

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
Route::get('/pegawai', [PegawaiController::class, 'index'])->name('pegawai.index')->middleware('auth');
Route::get('/create-pegawai', 'App\Http\Controllers\PegawaiController@create')->name('pegawai.create-pegawai');
Route::post('/save-pegawai', 'App\Http\Controllers\PegawaiController@store')->name('pegawai.save-pegawai');
Route::get('/edit-pegawai/{id}', 'App\Http\Controllers\PegawaiController@edit')->name('pegawai.edit-pegawai');
Route::post('/update-pegawai/{id}', 'App\Http\Controllers\PegawaiController@update')->name('pegawai.update-pegawai');
Route::get('/detail-pegawai/{id}', 'App\Http\Controllers\PegawaiController@show')->name('pegawai.detail-pegawai');
Route::get('/delete-pegawai/{id}', 'App\Http\Controllers\PegawaiController@destroy')->name('pegawai.delete-pegawai');

Route::get('/divisi', 'App\Http\Controllers\DivisiController@index')->name('divisi.index');
Route::get('/create-divisi', 'App\Http\Controllers\DivisiController@create')->name('divisi.create-divisi');
Route::post('/save-divisi', 'App\Http\Controllers\DivisiController@store')->name('divisi.save-divisi');
Route::get('/edit-divisi/{id}', 'App\Http\Controllers\DivisiController@edit')->name('divisi.edit-divisi');
Route::post('/update-divisi/{id}', 'App\Http\Controllers\DivisiController@update')->name('divisi.update-divisi');
Route::get('/detail-divisi/{id}', 'App\Http\Controllers\DivisiController@show')->name('divisi.detail-divisi');
Route::get('/delete-divisi/{id}', 'App\Http\Controllers\DivisiController@destroy')->name('divisi.delete-divisi');

Route::get('/', [LoginController::class, 'login'])->name('auth.login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

Route::get('formemail', [SendEmailController::class, 'index']);
Route::post('kirim', [SendEmailController::class, 'kirim']);
