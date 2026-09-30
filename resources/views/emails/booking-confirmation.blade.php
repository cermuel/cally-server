@extends('emails.layout', ['title' => 'Your meeting is scheduled'])

@section('preheader')
    Your meeting with {{ $hostName }} on {{ $meetingTime }} is scheduled.
@endsection

@section('content')
    <h1 style="margin:28px 0 8px;font-size:24px;line-height:32px;font-weight:600;letter-spacing:-0.025em;color:#09090b;">Your meeting is scheduled</h1>

    <p style="margin:0 0 24px;font-size:14px;line-height:24px;color:#71717a;">
        Hello {{ $name }}, your meeting with {{ $hostName }} on {{ $meetingTime }} is scheduled. View your booking for the meeting details.
    </p>

    <table role="presentation" cellpadding="0" cellspacing="0" border="0">
        <tr>
            <td style="border-radius:6px;background-color:#18181b;">
                <a href="{{ $bookingUrl }}" style="display:inline-block;padding:10px 20px;font-size:14px;line-height:20px;font-weight:500;color:#fafafa;text-decoration:none;border-radius:6px;">View booking</a>
            </td>
        </tr>
    </table>

    <hr style="margin:28px 0 20px;border:0;border-top:1px solid #e4e4e7;">

    <p style="margin:0;font-size:12px;line-height:20px;color:#a1a1aa;">
        Button not working? Paste this link into your browser:<br>
        <a href="{{ $bookingUrl }}" style="color:#71717a;text-decoration:underline;word-break:break-all;">{{ $bookingUrl }}</a>
    </p>
@endsection
