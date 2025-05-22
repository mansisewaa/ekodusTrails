<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to Exodus Trails</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f3f4f6;
            color: #1f2937;
            padding: 20px;
        }
        .email-container {
            max-width: 600px;
            margin: auto;
            background: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            text-align: center;
        }
        .logo {
            width: 120px;
            margin-bottom: 20px;
        }
        .heading {
            font-size: 24px;
            margin-bottom: 10px;
            color: #198754;
        }
        .message {
            font-size: 16px;
            margin: 20px 0;
            line-height: 1.6;
        }
        .button {
            display: inline-block;
            padding: 12px 25px;
            font-size: 16px;
            color: #fff;
            background-color: #198754;
            text-decoration: none;
            border-radius: 6px;
            margin-top: 20px;
        }
        .footer {
            margin-top: 40px;
            font-size: 14px;
            color: #6b7280;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <img src="{{ asset('images/logo-new.jpg') }}" alt="Exodus Trails Logo" class="logo">

        <h1 class="heading">Welcome {{ $user->name }} 👋</h1>

        <div class="message">
            Thank you for registering with <strong>Exodus Trails</strong>.<br>
            Your adventure begins now!
        </div>

        <a href="{{ route('booking') }}" class="button">Book Your First Trail</a>

        <div class="footer">
            Happy Hiking!<br>
            <strong>Team Exodus Trails</strong>
        </div>
    </div>
</body>
</html>
