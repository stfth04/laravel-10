<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\MahasiswaController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/greeting', function () {
    return "Selamat Pagi menjelang siang";
})->name('greeting');

Route::get('/halo/{nama}', function ($nama) {
    return "Selamat Pagi menjelang siang" . $nama ;
})->name('halo');

Route::get('/prodi', [ProdiController::class, 'list'])
->name('prodi_list');

Route::get('/prodi/add', [ProdiController::class, 'add'])
->name('prodi_add');

Route::post('/prodi/add_action', [ProdiController::class, 'add_action'])
->name('prodi_add_action');

Route::get('/mahasiswa', [MahasiswaController::class, 'list'])
->name('mahasiswa_list');
