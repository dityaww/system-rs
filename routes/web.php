<?php

use App\Http\Controllers\Dashboard;
use App\Http\Controllers\PasienController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('signin');
});

Route::get('/dashboard', [Dashboard::class, 'index'])->name('index');

Route::get('/pasien', [PasienController::class, 'index'])->name('pasien.index');
Route::get('/pasien/create', [PasienController::class, 'create'])->name('pasien.create');
Route::post('/pasien/store', [PasienController::class, 'store'])->name('pasien.store');
Route::get('/pasien/edit/{id}', [PasienController::class, 'edit'])->name('pasien.edit');
Route::post('/pasien/update/{id}', [PasienController::class, 'update'])->name('pasien.update');
Route::post('/pasien/delete/{id}', [PasienController::class, 'delete'])->name('pasien.delete');
