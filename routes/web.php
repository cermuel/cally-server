<?php

use App\Support\EmailTemplate;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

if (app()->isLocal()) {
    Route::get('/dev/email/reset-password', function () {
        return EmailTemplate::resetPassword(
            name: 'Shady',
            resetUrl: rtrim((string) config('services.frontend_url'), '/').'/auth/reset-password?token=preview-token',
            expiresIn: 'one hour',
        );
    });

    Route::get('/dev/email/verify-email', function () {
        return EmailTemplate::verifyEmail(
            verifyUrl: rtrim((string) config('services.frontend_url'), '/').'/auth/verify-email?token=preview-token',
            expiresIn: 'one hour',
        );
    });

    Route::get('/dev/email/welcome', function () {
        return EmailTemplate::welcome(
            name: 'Shady',
            dashboardUrl: rtrim((string) config('services.frontend_url'), '/').'/dashboard',
        );
    });
}
