<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SurahController;

Route::get('/', [SurahController::class, 'index']);
Route::get('/surah/{nomor}', [SurahController::class, 'show']);
