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
Route::get('pilih-login', [PageController::class, 'pilihLogin']);
Route::get('login-admin', [PageController::class, 'loginAdmin']);