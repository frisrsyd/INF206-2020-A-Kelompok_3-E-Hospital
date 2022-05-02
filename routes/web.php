<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

// Page Routes
Route::get('/', [PageController::class, 'index']);
Route::get('all-tools', [PageController::class, 'allTools']);
Route::get('rekap-pinjam', [PageController::class, 'rekapPinjam']);
Route::get('input-data', [PageController::class, 'inputData']);
Route::get('account', [PageController::class, 'account']);
Route::get('lupapassword', [PageController::class, 'lupapassword']);
Route::get('reset-password', [PageController::class, 'resetPassword']);
Route::get('ketersediaan-tool', [PageController::class, 'ketersediaanTool']);
Route::get('history-pinjam', [PageController::class, 'historyPinjam']);
Route::get('detail-history', [PageController::class, 'detailHistory']);
Route::get('edit-profile', [PageController::class, 'editProfile']);
Route::get('notifikasi', [PageController::class, 'notifikasi']);
Route::get('struk-peminjaman', [PageController::class, 'strukPeminjaman']);
Route::get('cetak-struk', [PageController::class, 'cetakStruk']);

// middleware guest
Route::get('signUp', [PageController::class, 'signUp'])->middleware('guest');
Route::get('login', [PageController::class, 'login'])->middleware('guest');

// Register Routes
Route::post('register', [RegisterController::class, 'store']);

// Login Routes
Route::post('login', [LoginController::class, 'authenticate']);
Route::post('logout', [LoginController::class, 'logout']);