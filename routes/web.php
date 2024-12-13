<?php

use App\Http\Controllers\ShareController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/code', 'new_text');
// Route::view('/code/{id}', 'share_link')->name('copy_link');

Route::post('/share', [ShareController::class, 'share'])->name('share');
Route::get('/{id}', [PageController::class, 'check'])->name('user.check');
