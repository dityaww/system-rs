<?php

use App\Http\Controllers\Dashboard;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\PoliController;
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

Route::get('/dokter', [DokterController::class, 'index'])->name('dokter.index');

Route::get('/poli', [PoliController::class, 'index'])->name('poli.index');
Route::get('/poli/create', [PoliController::class, 'create'])->name('poli.create');
Route::post('/poli/store', [PoliController::class, 'store'])->name('poli.store');
Route::get('/poli/edit/{id}', [PoliController::class, 'edit'])->name('poli.edit');
Route::post('/poli/update/{id}', [PoliController::class, 'update'])->name('poli.update');
Route::post('/poli/delete/{id}', [PoliController::class, 'delete'])->name('poli.delete');



