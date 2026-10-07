<?php

namespace App\Support;

class EmailTemplate
{
    /**
     * Render a password reset email.
     */
    public static function resetPassword(
        string $resetUrl,
        string $expiresIn = 'one hour',
        ?string $name = null,
    ): string {
        return view('emails.reset-password', [
            'greeting' => filled($name) ? 'Hello '.trim($name) : 'Hello',
            'resetUrl' => $resetUrl,
            'expiresIn' => $expiresIn,
        ])->render();
    }

    /**
     * Render an email verification email.
     */
    public static function verifyEmail(
        string $verifyUrl,
        string $expiresIn = 'one hour',
    ): string {
        return view('emails.verify-email', [
            'verifyUrl' => $verifyUrl,
            'expiresIn' => $expiresIn,
        ])->render();
    }

    /**
     * Render a welcome email.
     */
    public static function welcome(string $name, string $dashboardUrl): string
    {
        return view('emails.welcome', [
            'name' => $name,
            'dashboardUrl' => $dashboardUrl,
        ])->render();
    }

    /**
     * Render a booking invitation email.
     */
    public static function bookingInvitation(
        string $hostName,
        string $meetingTime,
        string $invitationUrl,
        ?string $name = null,
    ): string {
        return view('emails.booking-invitation', [
            'greeting' => filled($name) ? 'Hello '.trim($name) : 'Hello',
            'hostName' => $hostName,
            'meetingTime' => $meetingTime,
            'invitationUrl' => $invitationUrl,
        ])->render();
    }

    /**
     * Render a booking confirmation email.
     */
    public static function bookingConfirmation(
        string $name,
        string $hostName,
        string $meetingTime,
        string $bookingUrl,
    ): string {
        return view('emails.booking-confirmation', [
            'name' => $name,
            'hostName' => $hostName,
            'meetingTime' => $meetingTime,
            'bookingUrl' => $bookingUrl,
        ])->render();
    }

    /**
     * Render an email notification.
     */
    public static function notification(
        string $title,
        ?string $message = null,
        ?string $actionUrl = null,
        ?string $name = null,
    ): string {
        return view('emails.notification', [
            'greeting' => filled($name) ? 'Hello '.trim($name) : 'Hello',
            'title' => $title,
            'message' => $message,
            'actionUrl' => $actionUrl,
        ])->render();
    }
}
