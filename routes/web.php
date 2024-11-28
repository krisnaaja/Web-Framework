<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriBarangController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/user', [UserController::class, 'index'])->name('user');
Route::get('/kategori-barang', [KategoriBarangController::class, 'index'])->name('kategori.barang');
Route::get('/barang', [BarangController::class, 'index'])->name('barang');
Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan');