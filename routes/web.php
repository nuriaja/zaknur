<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\RuangController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\jadwalController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {return view('welcome');});
Route::get('/home', function () {return view('admin.dashboard');});
Route::get('/editmpl', function () {return view('admin/editmapel');});
Route::get('/login', function () {return view('auth.login');});
Route::get('/jadwal', function () {return view('admin.jadwal');});
Route::resource('siswa', SiswaController::class);
Route::resource('ruang', RuangController::class);
Route::resource('guru', GuruController::class);
Route::resource('kelas', KelasController::class);
Route::resource('jadwal', jadwalController::class);
Route::get('mapel/create/{id}', [MapelController::class, 'mapel']); 
    
Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    // Route::get('/guru', function () {
    //     return view('admin.guru');
    // });
    
    // Route::get('/ruang', function () {
    //     return view('admin.ruang');
    // });
    
    // Route::get('/siswa', function () {
    //     return view('admin.siswa');
    // });