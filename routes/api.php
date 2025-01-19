<?php

use App\Http\Controllers\Api\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;

Route::post('auth/login', [AuthController::class, 'login']);

Route::group(['middleware' => ['apiJwt']], function () {
    Route::get('users', [UserController::class, 'index']);
});
