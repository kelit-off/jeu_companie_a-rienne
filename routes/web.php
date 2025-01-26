<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LandingPageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LandingPageController::class, 'index']);

// Section Auth
Route::get('/auth/register', [AuthController::class, 'viewRegister']);
Route::post('/auth/register', [AuthController::class, 'postRegister']);
Route::post('/auth/login', [AuthController::class, 'postLogin']);

// Section Jeu
Route::get('/game', [LandingPageController::class, 'game']);
