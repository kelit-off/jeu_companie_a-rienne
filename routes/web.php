<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\LandingPageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LandingPageController::class, 'index'])->name("login");

// Section Auth
Route::get('/auth/register', [AuthController::class, 'viewRegister']);
Route::post('/auth/register', [AuthController::class, 'postRegister']);
Route::post('/auth/login', [AuthController::class, 'postLogin']);

Route::middleware('auth')->group(function () {
    Route::get('/auth/logout', [AuthController::class, 'logout']);

    // Section Jeu
    Route::get('/game', [LandingPageController::class, 'game']);

    // Section Employe
    Route::get('/game/employe', [EmployeController::class, 'viewListEmploye']);
});
