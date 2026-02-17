<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'index']);

Route::get('/register', [UserController::class, 'create']);

Route::post('/register', [UserController::class, 'registerUser'])->name('users.store');

Route::get('/login', [UserController::class, 'login']);

Route::post('/login', [UserController::class, 'loginUser'])->name('users.access');

Route::post('/loggout', [UserController::class, 'destroy'])->name('users.loggout');

Route::get('/profile/{id}', [UserController::class, 'profile']);

Route::get('/profile/{profile}/edit', [ProfileController::class, 'profileUser'])
    ->middleware('auth');

Route::post('/profile/{profile}/edit', [ProfileController::class, 'storeProfile'])
    ->name('users.profile')
    ->middleware('auth');

Route::get('/test', [ProfileController::class, 'profileCreate']);

Route::get('/profile/{post}/send_post', [PostController::class, 'postPublication'])
    ->middleware('auth');


