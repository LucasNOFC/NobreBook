<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'index']);

Route::get('/register', [UserController::class, 'create']);

Route::post('/register', [UserController::class, 'store'])->name('users.store');

Route::get('/login', [UserController::class, 'login']);

Route::post('/login', [UserController::class, 'access'])->name('users.access');

Route::post('/loggout', [UserController::class, 'destroy'])->name('users.loggout');

Route::get('/profile/{id}', [UserController::class, 'profile']);