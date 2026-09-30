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

    Route::get('/dev/email/booking-invitation', function () {
        return EmailTemplate::bookingInvitation(
            name: null,
            hostName: 'Alex Morgan',
            meetingTime: 'Thursday, 8 October at 2:30 PM BST',
            invitationUrl: rtrim((string) config('services.frontend_url'), '/').'/invitations/preview-invitation',
        );
    });

    Route::get('/dev/email/booking-confirmation', function () {
        return EmailTemplate::bookingConfirmation(
            name: 'Shady',
            hostName: 'Alex Morgan',
            meetingTime: 'Thursday, 8 October at 2:30 PM BST',
            bookingUrl: rtrim((string) config('services.frontend_url'), '/').'/bookings/preview-booking',
        );
    });
}
