<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\HalamanstatisController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ModulController;

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

/* Route::get('/', function () {
    return view('welcome');
}); */

/* Route::get('/', function () {
    return ('Selamat Datang laravel');
}); */

Route::get('/beranda', function () {
    return view('beranda');
});

Route::get('/agenda', [AgendaController::class, 'index']);
Route::get('/album', [AlbumController::class, 'index']);
Route::get('/berita', [BeritaController::class, 'index']);
Route::get('/halamanstatis', [HalamanstatisController::class, 'index']);
Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/modul', [ModulController::class, 'index']);
