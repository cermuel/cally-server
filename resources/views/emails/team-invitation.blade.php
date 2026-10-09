@extends('emails.layout', ['title' => 'You have been invited to join '.$teamName])

@section('preheader')
    {{ $inviterName }} invited you to join {{ $teamName }} on Cally.
@endsection

@section('content')
    <h1 style="margin:28px 0 8px;font-size:24px;line-height:32px;font-weight:600;letter-spacing:-0.025em;color:#09090b;">Join {{ $teamName }}</h1>

    <p style="margin:0 0 24px;font-size:14px;line-height:24px;color:#71717a;">
        {{ $inviterName }} invited you to join the {{ $teamName }} team on Cally. Accept the invitation to start scheduling and collaborating with the team. This invitation expires in {{ $expiresIn }}.
    </p>

    <table role="presentation" cellpadding="0" cellspacing="0" border="0">
        <tr>
            <td style="border-radius:6px;background-color:#18181b;">
                <a href="{{ $invitationUrl }}" style="display:inline-block;padding:10px 20px;font-size:14px;line-height:20px;font-weight:500;color:#fafafa;text-decoration:none;border-radius:6px;">Accept invitation</a>
            </td>
        </tr>
    </table>

    <p style="margin:24px 0 0;font-size:14px;line-height:24px;color:#71717a;">
        Sign in or create a Cally account using the email address that received this invitation. If you weren't expecting this invitation, you can ignore this email.
    </p>

    <hr style="margin:28px 0 20px;border:0;border-top:1px solid #e4e4e7;">

    <p style="margin:0;font-size:12px;line-height:20px;color:#a1a1aa;">
        Button not working? Paste this link into your browser:<br>
        <a href="{{ $invitationUrl }}" style="color:#71717a;text-decoration:underline;word-break:break-all;">{{ $invitationUrl }}</a>
    </p>
@endsection
