@extends('emails.layout', ['title' => 'A new meeting time has been proposed'])

@section('preheader')
    {{ $requesterName }} proposed a new time for {{ $meetingName }}.
@endsection

@section('content')
    <h1 style="margin:28px 0 8px;font-size:24px;line-height:32px;font-weight:600;letter-spacing:-0.025em;color:#09090b;">Can you make the new time?</h1>

    <p style="margin:0 0 24px;font-size:14px;line-height:24px;color:#71717a;">
        {{ $greeting }}, {{ $requesterName }} proposed a new time for <strong style="color:#3f3f46;">{{ $meetingName }}</strong>. Review the change below and accept it if the new time works for you.
    </p>

    <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0" style="margin:0 0 24px;border:1px solid #e4e4e7;border-radius:8px;">
        <tr>
            <td style="padding:16px 18px;border-bottom:1px solid #e4e4e7;">
                <p style="margin:0 0 4px;font-size:11px;line-height:16px;font-weight:600;letter-spacing:0.06em;text-transform:uppercase;color:#a1a1aa;">Current time</p>
                <p style="margin:0;font-size:14px;line-height:22px;color:#71717a;text-decoration:line-through;">{{ $currentMeetingTime }}</p>
            </td>
        </tr>
        <tr>
            <td style="padding:16px 18px;">
                <p style="margin:0 0 4px;font-size:11px;line-height:16px;font-weight:600;letter-spacing:0.06em;text-transform:uppercase;color:#71717a;">Proposed time</p>
                <p style="margin:0;font-size:15px;line-height:24px;font-weight:600;color:#18181b;">{{ $proposedMeetingTime }}</p>
            </td>
        </tr>
    </table>

    <table role="presentation" cellpadding="0" cellspacing="0" border="0">
        <tr>
            <td style="border-radius:6px;background-color:#18181b;">
                <a href="{{ $responseUrl }}" style="display:inline-block;padding:10px 20px;font-size:14px;line-height:20px;font-weight:500;color:#fafafa;text-decoration:none;border-radius:6px;">Review and accept new time</a>
            </td>
        </tr>
    </table>

    <p style="margin:16px 0 0;font-size:12px;line-height:20px;color:#a1a1aa;">
        The meeting time will only change after the required attendees accept the proposal.
    </p>

    <hr style="margin:28px 0 20px;border:0;border-top:1px solid #e4e4e7;">

    <p style="margin:0;font-size:12px;line-height:20px;color:#a1a1aa;">
        Button not working? Paste this link into your browser:<br>
        <a href="{{ $responseUrl }}" style="color:#71717a;text-decoration:underline;word-break:break-all;">{{ $responseUrl }}</a>
    </p>
@endsection
