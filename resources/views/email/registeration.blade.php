<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>InfluencerPro – User Registration</title>
    <style>
        body {
            background-color: #f9f9f9;
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            background: #fff;
            margin: 40px auto;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            overflow: hidden;
        }
        .header {
            background: #3B82F6;
            color: #fff;
            text-align: center;
            padding: 30px 20px;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
        }
        .content {
            padding: 30px 40px;
            text-align: center;
        }
        .content h2 {
            color: #111;
        }
        .otp {
            display: inline-block;
            background: #f3f4f6;
            color: #111;
            font-weight: bold;
            letter-spacing: 3px;
            font-size: 20px;
            padding: 12px 20px;
            border-radius: 6px;
            margin: 20px 0;
        }
        .footer {
            text-align: center;
            background: #f3f4f6;
            padding: 20px;
            font-size: 13px;
            color: #555;
        }
        .social-icons img {
            width: 24px;
            margin: 0 8px;
            vertical-align: middle;
        }
    </style>
</head>
<body>
    <div class="container">
    <a class="" href="{{env('BASE_URL') . 'home'}}" >
                            <img src="{{asset('images/businesshub.png')}}" alt="" width="120px" class="shaking" alt="logo">
                        </a>

        <div class="content">
            <h2>Hey {{ $details['name'] }},</h2>
            <p>Welcome to <strong>BusinessHub</strong>! Please verify your email using the OTP below:</p>

            <div class="otp">{{ $details['otp'] }}</div>

            <p>If you didn’t request this, please ignore this email.</p>
        </div>

        <div class="footer">
            <div class="social-icons">
                <a href="https://facebook.com/yourpage"><img src="{{ asset('images/socialicon/insta.png')}}" alt="Instagram"></a>
                <a href="https://twitter.com/yourpage"><img src="{{ asset('images/socialicon/fb.png')}}" alt="Twitter"></a>
                <a href="https://instagram.com/yourpage"><img src="{{ asset('images/twitter-color-svgrepo-com.svg')}}" alt="Twitter"></a>
                <a href="https://yourwebsite.com"><img src="{{ asset('images/socialicon/web.png')}}" alt="Website"></a>
            </div>
            <p>&copy; {{ date('Y') }} BusinessHub. All rights reserved.</p>
        </div>
    </div>
</body>
</html>
