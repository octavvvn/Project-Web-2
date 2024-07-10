<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DetailLayananController;
use App\Http\Controllers\MontirController;
use App\Http\Controllers\KategoriMontirController;

Auth::routes();

// Route untuk home yang menjadi landing page
Route::get('/', [HomeController::class, 'index'])->name('home');

// Route untuk dashboard yang hanya bisa diakses oleh pengguna yang sudah login
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

Route::resource('layanans', LayananController::class);
Route::resource('detail-layanans', DetailLayananController::class);
Route::resource('montirs', MontirController::class);
Route::resource('kategori-montirs', KategoriMontirController::class);

Route::get('/test-view', function () {
    $kategoriMontir = \App\Models\KategoriMontir::first();
    return view('kategori-montirs.show', compact('kategoriMontir'));
});
