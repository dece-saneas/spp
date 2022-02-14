<?php

use App\Http\Controllers\Auth\AuthenticatedController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')
    ->group(function () {
        Route::get('/login', [AuthenticatedController::class, 'showLoginForm'])
            ->name('login');

        Route::post('/login', [AuthenticatedController::class, 'login']);
    });

Route::middleware('auth')
    ->group(function () {
        Route::post('/logout', [AuthenticatedController::class, 'logout'])
            ->name('logout');
    });
