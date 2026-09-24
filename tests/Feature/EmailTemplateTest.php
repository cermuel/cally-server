<?php

use App\Support\EmailTemplate;

it('renders a reset password email with escaped copy and action link', function () {
    $html = EmailTemplate::resetPassword(
        resetUrl: 'https://example.com/reset-password?token=abc123',
        expiresIn: '15 minutes',
        name: 'Shady <script>alert("nope")</script>',
    );

    expect($html)
        ->toContain('Reset password')
        ->toContain('https://example.com/reset-password?token=abc123')
        ->toContain('15 minutes')
        ->toContain('Hello Shady &lt;script&gt;alert(&quot;nope&quot;)&lt;/script&gt;')
        ->not->toContain('<script>alert("nope")</script>');
});

it('renders a reset password email without asking for a name', function (?string $name) {
    $html = EmailTemplate::resetPassword(
        resetUrl: 'https://example.com/reset-password?token=abc123',
        expiresIn: '15 minutes',
        name: $name,
    );

    expect($html)
        ->toContain('Hello, we got a request')
        ->not->toContain('Hello ,')
        ->not->toContain('Hello  ');
})->with([
    'missing name' => null,
    'blank name' => '   ',
]);

it('renders a verify email without asking for a name', function () {
    $html = EmailTemplate::verifyEmail(
        verifyUrl: 'https://example.com/verify-email?token=abc123',
        expiresIn: '15 minutes',
    );

    expect($html)
        ->toContain('Verify your email')
        ->toContain('Complete registration')
        ->toContain('https://example.com/verify-email?token=abc123')
        ->toContain('15 minutes')
        ->not->toContain('Hi ');
});

it('renders a welcome email with escaped copy and dashboard link', function () {
    $html = EmailTemplate::welcome(
        name: 'Shady <script>alert("nope")</script>',
        dashboardUrl: 'https://example.com/dashboard',
    );

    expect($html)
        ->toContain('Welcome to Cally')
        ->toContain('Connect Google Calendar')
        ->toContain('https://example.com/dashboard')
        ->toContain('Shady &lt;script&gt;alert(&quot;nope&quot;)&lt;/script&gt;')
        ->not->toContain('<script>alert("nope")</script>');
});
