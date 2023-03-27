<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Correo electrónico de ejemplo</title>
</head>
<body style="font-family: Arial, sans-serif; font-size: 16px;">
    <table cellpadding="0" cellspacing="0" width="100%" style="background-color: #f6f6f6; font-family: Arial, sans-serif; font-size: 16px; line-height: 1.4; margin: 0; padding: 0; width: 100% !important;">
        <tr>
            <td align="center" valign="top" style="padding: 40px 20px;">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" style="height: 80px; margin-bottom: 20px;">
                <h1 style="color: #333; font-size: 24px; font-weight: 700; margin: 0;">Bienvenido</h1>
                <p style="color: #666; margin-top: 20px;">Hola {{ $name }},</p>
                <p style="color: #666;">Gracias</p>
               
            </td>
        </tr>
    </table>
</body>
</html>