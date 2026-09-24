<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="color-scheme" content="light">
    <title>{{ $title }}</title>
</head>
<body style="margin:0;padding:0;background-color:#fafafa;-webkit-text-size-adjust:100%;">
    <div style="display:none;max-height:0;overflow:hidden;opacity:0;">@yield('preheader')</div>

    <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:#fafafa;">
        <tr>
            <td align="center" style="padding:40px 16px;">
                <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0" style="max-width:480px;background-color:#ffffff;border:1px solid #e4e4e7;border-radius:12px;">
                    <tr>
                        <td style="padding:32px;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif;">
                            <table role="presentation" cellpadding="0" cellspacing="0" border="0">
                                <tr>
                                    <td style="padding-right:10px;">
                                        <img src="https://cdn.ipaslogo.com/display-512/d574eb13244e7806-alpaca-7.webp" width="32" height="32" alt="Cally" style="display:block;border-radius:8px;border:0;">
                                    </td>
                                    <td style="font-size:16px;font-weight:600;color:#09090b;letter-spacing:-0.01em;">Cally</td>
                                </tr>
                            </table>

                            @yield('content')
                        </td>
                    </tr>
                </table>

                <p style="margin:20px 0 0;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif;font-size:12px;line-height:20px;color:#a1a1aa;text-align:center;">
                    Cally — simple scheduling for everyone.
                </p>
            </td>
        </tr>
    </table>
</body>
</html>
