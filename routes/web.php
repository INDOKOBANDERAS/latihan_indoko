<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [ProfileController::class, 'index']);
Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');
