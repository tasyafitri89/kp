<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('ktp', \App\Http\Controllers\KtpController::class)
    ->middleware('auth');

Route::resource('kartukeluarga', \App\Http\Controllers\KartuKeluargaController::class)
    ->middleware('auth');

Route::resource('aktakelahiran', \App\Http\Controllers\AktaKelahiranController::class)
    ->middleware('auth');

Route::resource('suppliers', \App\Http\Controllers\SupplierController::class)
    ->middleware('auth');

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');
