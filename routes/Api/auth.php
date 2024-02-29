<?php

use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\EmailVerificationController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;

Route::post('/auth/register',[RegisterController::class , 'register']);
Route::post('/auth/login',[LoginController::class , 'login']);
Route::post('/auth/email', [EmailVerificationController::class, 'email']);
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/auth/get-otp', [EmailVerificationController::class, 'sendEmailVerifiy']);
});
Route::post('/auth/forgot-password', [ForgotPasswordController::class, 'forgotPass']);
Route::post('/auth/reset-password', [ResetPasswordController::class, 'resetPass']);
