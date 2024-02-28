<?php

use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\EmailVerificationController;

Route::post('/auth/register',[RegisterController::class , 'register']);
Route::post('/auth/login',[LoginController::class , 'login']);
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/auth/email', [EmailVerificationController::class, 'email']);
});
