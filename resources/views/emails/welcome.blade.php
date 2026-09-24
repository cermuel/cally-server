@extends('emails.layout', ['title' => 'Welcome to Cally'])

@section('preheader')
    Your account is ready. Set up your booking page in a few minutes.
@endsection

@section('content')
    <h1 style="margin:28px 0 8px;font-size:24px;line-height:32px;font-weight:600;letter-spacing:-0.025em;color:#09090b;">Welcome to Cally, {{ $name }}</h1>

    <p style="margin:0 0 24px;font-size:14px;line-height:24px;color:#71717a;">
        Your account is ready. Cally gives you a public booking page where people can book time with you, only when you're actually free. Here's how to get set up:
    </p>

    <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0" style="border:1px solid #e4e4e7;border-radius:8px;">
        <tr>
            <td style="padding:14px 16px;border-bottom:1px solid #e4e4e7;">
                <p style="margin:0;font-size:14px;line-height:20px;font-weight:500;color:#09090b;">Connect Google Calendar</p>
                <p style="margin:2px 0 0;font-size:13px;line-height:20px;color:#71717a;">Cally checks your calendar so you never get double-booked.</p>
            </td>
        </tr>
        <tr>
            <td style="padding:14px 16px;border-bottom:1px solid #e4e4e7;">
                <p style="margin:0;font-size:14px;line-height:20px;font-weight:500;color:#09090b;">Set your weekly availability</p>
                <p style="margin:2px 0 0;font-size:13px;line-height:20px;color:#71717a;">Pick the days and hours you're open for meetings.</p>
            </td>
        </tr>
        <tr>
            <td style="padding:14px 16px;">
                <p style="margin:0;font-size:14px;line-height:20px;font-weight:500;color:#09090b;">Share your booking link</p>
                <p style="margin:2px 0 0;font-size:13px;line-height:20px;color:#71717a;">Every booking creates a calendar event with a Google Meet link and emails you both.</p>
            </td>
        </tr>
    </table>

    <table role="presentation" cellpadding="0" cellspacing="0" border="0" style="margin-top:24px;">
        <tr>
            <td style="border-radius:6px;background-color:#18181b;">
                <a href="{{ $dashboardUrl }}" style="display:inline-block;padding:10px 20px;font-size:14px;line-height:20px;font-weight:500;color:#fafafa;text-decoration:none;border-radius:6px;">Go to dashboard</a>
            </td>
        </tr>
    </table>

    <hr style="margin:28px 0 20px;border:0;border-top:1px solid #e4e4e7;">

    <p style="margin:0;font-size:12px;line-height:20px;color:#a1a1aa;">
        Questions? Just reply to this email and we'll help.
    </p>
@endsection
