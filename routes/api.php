<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AutomationController;
use App\Http\Controllers\AvailabilityController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ConnectionController;
use App\Http\Controllers\GoogleAuthController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\PublicController;
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

Route::get('/google/redirect', [GoogleAuthController::class, 'redirect']);
Route::get('/google/callback', [GoogleAuthController::class, 'callback']);

Route::middleware('auth:sanctum')->get('/connections/google/redirect', [GoogleAuthController::class, 'connectionRedirect']);

Route::get('/public/profile', [PublicController::class, 'getProfile']);
Route::get('/public/{username}/events', [PublicController::class, 'getEvents']);
Route::get('/public/events/{event}/schedule', [PublicController::class, 'getUserSchedule']);
Route::post('/public/schedule', [PublicController::class, 'schedule']);

Route::get('/bookings/details/{id}', [BookingController::class, 'getBookingDetails']);
Route::get('/guest/{email}', [GuestController::class, 'guestByEmail']);
Route::apiResource('guests', GuestController::class)->only(['index', 'update', 'store', 'destroy']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/users/me', [UserController::class, 'profile']);
    Route::get('/users/check-username', [UserController::class, 'checkUsername']);
    Route::patch('/users/edit-profile', [UserController::class, 'update']);
    Route::patch('/users/change-password', [UserController::class, 'changePassword']);
    Route::patch('/users/complete-onboarding', [UserController::class, 'completeOnboarding']);

    Route::apiResource('availability', AvailabilityController::class)->only(['index', 'update', 'store', 'destroy']);
    Route::get('/automations/templates', [AutomationController::class, 'templates']);
    Route::get('/automations/variables', [AutomationController::class, 'variables']);
    Route::apiResource('automations', AutomationController::class)->whereNumber('automation');
    Route::apiResource('connections', ConnectionController::class)->only(['index']);
    Route::apiResource('links', LinkController::class);
    Route::apiResource('bookings', BookingController::class);
});
