<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'index']);

Route::get('/register', [UserController::class, 'create']);

Route::post('/register', [UserController::class, 'store'])->name('users.store');