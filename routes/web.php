<?php

use App\Http\Controllers\PasienController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('signin');
});

Route::get('/dashboard', function () {
    return view('home');
});

Route::get('/pasien', [PasienController::class, 'index'])->name('pasien.index');
Route::get('/pasien/create', [PasienController::class, 'create'])->name('pasien.create');
Route::get('/pasien/edit', [PasienController::class, 'edit'])->name('pasien.edit');
