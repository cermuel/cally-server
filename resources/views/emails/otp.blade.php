@extends('emails.layout', ['title' => 'Your verification code'])

@section('preheader')
    Your Cally verification code is {{ $code }}.
@endsection

@section('content')
    <h1 style="margin:28px 0 8px;font-size:24px;line-height:32px;font-weight:600;letter-spacing:-0.025em;color:#09090b;">Your verification code</h1>

    <p style="margin:0 0 24px;font-size:14px;line-height:24px;color:#71717a;">
        Enter the code below to finish signing in to Cally. This code expires in {{ $expiresIn }}.
    </p>

    <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0">
        <tr>
            <td align="center" style="padding:20px 16px;background-color:#f4f4f5;border:1px solid #e4e4e7;border-radius:8px;">
                <span style="display:inline-block;font-family:ui-monospace,SFMono-Regular,Menlo,Consolas,'Liberation Mono',monospace;font-size:32px;line-height:40px;font-weight:600;letter-spacing:0.35em;color:#09090b;padding-left:0.35em;">{{ $code }}</span>
            </td>
        </tr>
    </table>

    <p style="margin:24px 0 0;font-size:14px;line-height:24px;color:#71717a;">
        If you didn't try to sign in, you can ignore this email. Someone may have typed your email address by mistake.
    </p>

    <hr style="margin:28px 0 20px;border:0;border-top:1px solid #e4e4e7;">

    <p style="margin:0;font-size:12px;line-height:20px;color:#a1a1aa;">
        Never share this code with anyone. Cally will never ask you for it.
    </p>
@endsection
