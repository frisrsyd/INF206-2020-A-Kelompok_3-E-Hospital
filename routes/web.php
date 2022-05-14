<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DataController;

// Public Routes
// Page Routes
Route::get('/', [PageController::class, 'index']);
Route::get('all-tools', [PageController::class, 'allTools']);
Route::get('reset-password', [PageController::class, 'resetPassword']);
Route::get('account', [PageController::class, 'account']);
Route::get('lupapassword', [PageController::class, 'lupapassword']);
// middleware guest
Route::get('signUp', [PageController::class, 'signUp'])->middleware('guest');
Route::get('login', [PageController::class, 'login'])->middleware('guest');
// Register Routes
Route::post('register', [RegisterController::class, 'store']);
// Login Routes
Route::post('login', [LoginController::class, 'authenticate']);


// Protected Routes
Route::middleware('auth')->group(function () {
    Route::get('ketersediaan-tool/rekap-pinjam/{post}', [PageController::class, 'rekapPinjam']);
    Route::get('input-data', [PageController::class, 'inputData']);
    Route::get('ketersediaan-tool/{post}', [PageController::class, 'ketersediaanTool']);
    Route::get('history-pinjam', [PageController::class, 'historyPinjam']);
    Route::get('detail-history', [PageController::class, 'detailHistory']);
    Route::get('edit-profile', [PageController::class, 'editProfile']);
    Route::get('notifikasi', [PageController::class, 'notifikasi']);
    Route::get('struk-peminjaman', [PageController::class, 'strukPeminjaman']);
    Route::get('cetak-struk', [PageController::class, 'cetakStruk']);
    //logout Route
    Route::post('logout', [LoginController::class, 'logout']);
    // input data routes
    Route::post('input-data', [DataController::class, 'store']);
  
    
    Route::get('syarat-ketentuan', [PageController::class, 'syaratKetentuan']);
    Route::get('on-loan-user', [PageController::class, 'onLoanUser']);
    Route::get('detail-on-loan-user', [PageController::class, 'DetailonLoanUser']);
    Route::get('on-loan-admin', [PageController::class, 'onLoanAdmin']);
    Route::get('detail-on-loan-admin', [PageController::class, 'DetailonLoanAdmin']);  
    Route::get('antrian', [PageController::class, 'antrian']);
    Route::get('detail-antrian', [PageController::class, 'detailAntrian']);
});