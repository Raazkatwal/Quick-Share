<?php

use App\Http\Controllers\ShareController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/code', 'new_text');

Route::post('/share', [ShareController::class, 'share'])->name('share');
Route::post('/search', [ShareController::class, 'search'])->name('search');
Route::get('/code/{id}', [ShareController::class, 'fetch_code'])->name('copy_text');
Route::get('/{id}', [ShareController::class, 'check'])->name('share_link');
