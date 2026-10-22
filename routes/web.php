<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporBanjirController;
use App\Http\Controllers\AgrilinkController;

Route::get('/', function () {
    return "Halaman Utama Praktikum - Pilih /laporan (Tugas 1) atau /agrilink (Tugas 2)";
});

// ==========================================
// ROUTE TUGAS 1: LAPOR BANJIR
// ==========================================
Route::prefix('laporan')->group(function () {
    Route::get('/', [LaporBanjirController::class, 'index'])->name('laporan.index');
    Route::get('/buat', [LaporBanjirController::class, 'create'])->name('laporan.create');
    Route::post('/simpan', [LaporBanjirController::class, 'store'])->name('laporan.store');
    Route::get('/konfirmasi', [LaporBanjirController::class, 'konfirmasi'])->name('laporan.konfirmasi');
});

// ==========================================
// ROUTE TUGAS 2: AGRILINK ID
// ==========================================
Route::prefix('agrilink')->group(function () {
    Route::get('/katalog', [AgrilinkController::class, 'index'])->name('agrilink.index');
    Route::post('/katalog/simpan', [AgrilinkController::class, 'store'])->name('agrilink.store');
    Route::get('/petani', [AgrilinkController::class, 'daftarPetani'])->name('agrilink.petani');
});