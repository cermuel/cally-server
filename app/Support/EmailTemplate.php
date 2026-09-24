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
}
