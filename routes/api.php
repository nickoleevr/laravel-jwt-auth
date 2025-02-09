<?php

use App\Http\Controllers\Api\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Middleware\ApiProtectedRoute;

Route::post('auth/login', [AuthController::class, 'login']);

Route::middleware([ApiProtectedRoute::class])->group(function () {
    Route::get('users', [UserController::class, 'index']);
});
