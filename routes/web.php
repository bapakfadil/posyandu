<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnakController;
use App\Http\Controllers\IbuHamilController;
use App\Http\Controllers\ImunisasiController;
use App\Http\Controllers\TimbangController;
use App\Http\Controllers\PeriksaKehamilanController;
use App\Http\Controllers\BantuanController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::resource('anak', AnakController::class);
    Route::resource('ibu_hamil', IbuHamilController::class);
    Route::resource('imunisasi', ImunisasiController::class);
    Route::resource('timbang', TimbangController::class);
    Route::resource('periksa_kehamilan', PeriksaKehamilanController::class);
    Route::get('/periksa_kehamilan/cetak/{id}', [PeriksaKehamilanController::class, 'cetakLaporan'])->name('periksa_kehamilan.cetak');
    Route::get('/imunisasi/cetak/{id}', [ImunisasiController::class, 'cetakLaporan'])->name('imunisasi.cetak');
});

Route::get('/bantuan', [BantuanController::class, 'index'])->name('bantuan.index');

require __DIR__.'/auth.php';
