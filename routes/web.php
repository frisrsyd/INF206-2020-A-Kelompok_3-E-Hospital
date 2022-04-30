<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;


Route::get('/', [PageController::class, 'index']);
Route::get('all-tools', [PageController::class, 'allTools']);
Route::get('rekap-pinjam', [PageController::class, 'rekapPinjam']);
Route::get('input-data', [PageController::class, 'inputData']);
Route::get('account', [PageController::class, 'account']);
Route::get('signUp', [PageController::class, 'signUp']);
Route::get('login', [PageController::class, 'login']);
Route::get('login-admin', [PageController::class, 'loginAdmin']);
Route::get('lupapassword', [PageController::class, 'lupapassword']);
Route::get('reset-password', [PageController::class, 'resetPassword']);
Route::get('ketersediaan-tool', [PageController::class, 'ketersediaanTool']);
Route::get('history-pinjam', [PageController::class, 'historyPinjam']);
Route::get('detail-history', [PageController::class, 'detailHistory']);
Route::get('edit-profile', [PageController::class, 'editProfile']);
Route::get('syarat-ketentuan', [PageController::class, 'syaratKetentuan']);
Route::get('on-loan-user', [PageController::class, 'onLoanUser']);