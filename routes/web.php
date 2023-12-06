<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PesawatController;
use App\Http\Controllers\RuteController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\PenumpangController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/dashboard', function () {
    return view('auth.dashboard');
})->name('dashboard');

Route::get('/', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::resource('pesawat', PesawatController::class)->middleware('auth');
Route::resource('rute', RuteController::class)->middleware('auth');
Route::resource('pemesanan', PemesananController::class)->middleware('auth');
Route::resource('penumpang', PenumpangController::class)->middleware('auth');

Route::get('/penumpang', [PenumpangController::class, 'index'])->name('penumpang.index');

Route::controller(AuthController::class)->group(function() {
    //register form
    Route::get('/register', 'register')->name('auth.register');
    //store register
    Route::post('/store', 'store')->name('auth.store');
    //login form
    Route::get('/login', 'login')->name('auth.login');
    //auth proses
    Route::post('/auth', 'auth')->name('auth.authentication');
    //logout
    Route::post('/logout', 'logout')->name('auth.logout');
    //dashboard page
    Route::get('/dashboard', 'dashboard')->name('dashboard');
});
