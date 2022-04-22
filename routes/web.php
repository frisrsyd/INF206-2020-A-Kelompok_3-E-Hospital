<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;


Route::get('/', [PageController::class, 'index']);
Route::get('all-tools', [PageController::class, 'allTools']);
Route::get('rekap-pinjam', [PageController::class, 'rekapPinjam']);
