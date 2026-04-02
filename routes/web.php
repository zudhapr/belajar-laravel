<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\AuthController;

Route::get('/', function(){ return view('dashboard');})->middleware('auth');

Route::get('/login',[AuthController::class,'loginForm'])->name('login');
Route::post('/login',[AuthController::class,'login']);
Route::get('/logout',[AuthController::class,'logout']);

Route::middleware(['auth'])->group(function(){
    Route::get('/mahasiswa', [MahasiswaController::class, 'tampil']);
    Route::get('/mahasiswa/tambah', [MahasiswaController::class, 'tambah']);
    Route::post('/mahasiswa/simpan', [MahasiswaController::class, 'simpan']);
    Route::get('/mahasiswa/edit/{id}', [MahasiswaController::class, 'edit']);
    Route::post('/mahasiswa/ubah/{id}', [MahasiswaController::class, 'ubah']);
    Route::get('/mahasiswa/hapus/{id}', [MahasiswaController::class, 'hapus']);
});