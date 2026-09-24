<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AvailabilityController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response()->json([
        'message' => 'Cally server running',
    ]);
});

Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/forgot-password', [AuthController::class, 'forgotPassword']);
Route::post('/reset-password', [AuthController::class, 'resetPassword']);
Route::get('/resend-email', [AuthController::class, 'resendEmail']);
Route::get('/verify-email', [AuthController::class, 'verifyEmail']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/users/me', [UserController::class, 'profile']);
    Route::get('/users/check-username', [UserController::class, 'checkUsername']);
    Route::patch('/users/edit-profile', [UserController::class, 'update']);
    Route::patch('/users/change-password', [UserController::class, 'changePassword']);
    Route::patch('/users/complete-onboarding', [UserController::class, 'completeOnboarding']);

    Route::apiResource('availability', AvailabilityController::class)->only(['index', 'update', 'store', 'destroy']);
});
