@extends('emails.layout', ['title' => 'Verify your email'])

@section('preheader')
    Confirm your email to finish setting up Cally.
@endsection

@section('content')
    <h1 style="margin:28px 0 8px;font-size:24px;line-height:32px;font-weight:600;letter-spacing:-0.025em;color:#09090b;">Verify your email</h1>

    <p style="margin:0 0 24px;font-size:14px;line-height:24px;color:#71717a;">
        Thanks for signing up. Confirm your email address to complete your registration. This link expires in {{ $expiresIn }}.
    </p>

    <table role="presentation" cellpadding="0" cellspacing="0" border="0">
        <tr>
            <td style="border-radius:6px;background-color:#18181b;">
                <a href="{{ $verifyUrl }}" style="display:inline-block;padding:10px 20px;font-size:14px;line-height:20px;font-weight:500;color:#fafafa;text-decoration:none;border-radius:6px;">Complete registration</a>
            </td>
        </tr>
    </table>

    <p style="margin:24px 0 0;font-size:14px;line-height:24px;color:#71717a;">
        If you didn't create a Cally account, you can ignore this email.
    </p>

    <hr style="margin:28px 0 20px;border:0;border-top:1px solid #e4e4e7;">

    <p style="margin:0;font-size:12px;line-height:20px;color:#a1a1aa;">
        Button not working? Paste this link into your browser:<br>
        <a href="{{ $verifyUrl }}" style="color:#71717a;text-decoration:underline;word-break:break-all;">{{ $verifyUrl }}</a>
    </p>
@endsection
