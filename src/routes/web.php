<?php

use Illuminate\Support\Facades\Route;
use Mgakif\LaravelGoogleLogin\Controllers\GoogleAuthController;

Route::get('/auth/google', [GoogleAuthController::class, 'redirectToGoogle']);
Route::get('/auth/google/callback', [GoogleAuthController::class, 'handleGoogleCallback']);
