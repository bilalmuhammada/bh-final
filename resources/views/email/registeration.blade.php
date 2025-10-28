<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ config('app.name') }} – Email Verification</title>
</head>
<body style="background-color: #f9f9f9; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; color: #333; margin: 0; padding: 0;">
    <div style="max-width: 600px; background: #ffffff; margin: 40px auto; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.1); overflow: hidden;">
        
        <!-- HEADER -->
        <div style="background: #3B82F6; color: #fff; text-align: center; padding: 30px 20px;">
            <a href="{{ env('BASE_URL') . 'home' }}" style="text-decoration: none;">
                <img src="{{ asset('images/businesshub.png') }}" alt="BusinessHub Logo" width="120" style="display:block; margin:0 auto 10px auto;">
            </a>
            <h1 style="margin: 0; font-size: 24px;">Welcome to {{ config('app.name') }}</h1>
        </div>

        <!-- CONTENT -->
        <div style="padding: 30px 40px; text-align: center;">
            <h2 style="color: #111; margin-top: 0;">Hey {{ $details['name'] }},</h2>
            <p style="font-size: 16px; line-height: 1.5; margin-bottom: 20px;">
                Welcome to <strong>{{ config('app.name') }}</strong>! Please verify your email using the OTP below:
            </p>

            <div style="display: inline-block; background: #f3f4f6; color: #111; font-weight: bold; letter-spacing: 3px; font-size: 20px; padding: 12px 20px; border-radius: 6px; margin: 20px 0;">
                {{ $details['otp'] }}
            </div>

            <p style="font-size: 14px; color: #666;">
                If you didn’t request this verification, please ignore this email.
            </p>
        </div>

        <!-- FOOTER -->
        <div style="text-align: center; background: #f3f4f6; padding: 20px; font-size: 13px; color: #555;">
            <div style="margin-bottom: 10px;">
                <a href="https://instagram.com/yourpage" style="margin: 0 8px; text-decoration: none;">
                    <img src="{{ asset('images/socialicon/insta.png') }}" alt="Instagram" width="24" style="vertical-align: middle;">
                </a>
                <a href="https://facebook.com/yourpage" style="margin: 0 8px; text-decoration: none;">
                    <img src="{{ asset('images/socialicon/fb.png') }}" alt="Facebook" width="24" style="vertical-align: middle;">
                </a>
                <a href="https://twitter.com/yourpage" style="margin: 0 8px; text-decoration: none;">
                    <img src="{{ asset('images/socialicon/twitter.png') }}" alt="Twitter" width="24" style="vertical-align: middle;">
                </a>
                <a href="https://yourwebsite.com" style="margin: 0 8px; text-decoration: none;">
                    <img src="{{ asset('images/socialicon/web.png') }}" alt="Website" width="24" style="vertical-align: middle;">
                </a>
            </div>
            <p style="margin: 5px 0;">&copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.</p>
        </div>

    </div>
</body>
</html>
