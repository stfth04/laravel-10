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
    return "Selamat Pagi";
})->name('greeting');

Route::get('/halo/{nama}', function ($nama) {
    return "Selamat Pagi ". $nama;
})->name('halo');

Route::get('/prodi', [ProdiController::class , 'List'])
    ->name('prodi_list');

Route::get('/prodi/add', [ProdiController::class , 'add'])
    ->name('prodi_add');

Route::post('/prodi/add_action', [ProdiController::class , 'add_action'])
    ->name('prodi_add_action');

Route::get('/mahasiswa', [MahasiswaController::class , 'List'])
    ->name('mahasiswa_list');

Route::get('/mahasiswa/add', [MahasiswaController::class , 'add'])
    ->name('mahasiswa_add');

Route::post('/mahasiswa/add_action', [MahasiswaController::class , 'add_action'])
    ->name('mahasiswa_add_action');

Route::get('/mahasiswa/edit/{mahasiswa}', [MahasiswaController::class , 'edit'])
    ->name('mahasiswa_edit');

Route::patch('/mahasiswa/edit_action/{mahasiswa}', [MahasiswaController::class , 'edit_action'])
    ->name('mahasiswa_edit_action');

Route::delete('/mahasiswa/delete/{mahasiswa}', [MahasiswaController::class , 'delete'])
    ->name('mahasiswa_delete');