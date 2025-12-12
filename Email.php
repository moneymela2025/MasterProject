<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your OTP Code</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f9fafb;
            margin: 0;
            padding: 0;
        }

        .email-wrapper {
            width: 100%;
            padding: 20px 0;
            background-color: #f9fafb;
        }

        .email-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgb(20 20 20 / 13%);
            overflow: hidden;
        }

        .email-header {
            background-color: #d3d3d3;
            color: #ffffff;
            text-align: center;
            padding: 20px;
        }

            .email-header h1 {
                font-size: 24px;
                margin: 0;
            }

        .email-content {
            padding: 20px;
            color: #333333;
            font-size: 16px;
            line-height: 1.5;
        }

        .otp-box {
            text-align: center;
            background-color: #f1f1f1;
            padding: 15px;
            margin: 20px 0;
            font-size: 24px;
            color: #333333;
            border-radius: 8px;
            font-weight: bold;
        }

        .email-footer {
            text-align: center;
            padding: 15px;
            background-color: #f9fafb;
            color: #777777;
            font-size: 12px;
            border-top: 1px solid #eaeaea;
        }
    </style>
</head>
<body>
    <div class="email-wrapper">
        <div class="email-container">
            <div class="email-header">
                <img src="public/images/logo.png"  style="width: 250px;"/>
            </div>
            
            <div class="email-content">
                <p>Dear {{UserName}},</p>
                <p>We received a request to generate an OTP for your account. Your OTP code is:</p>
                <p>If you have any questions, feel free to contact us at {{SupportEmail}}.</p>
                <p>Thank you,<br>The MoneyMela Team</p>
            </div>
            <div class="email-footer">
                <p>&copy; 2025 MoneyMela. All rights reserved.</p>
                <p>For any assistance, contact us at <a href="mailto:support@moneymela.co.in">support@moneymela.co.in</a>.</p>
            </div>
        </div>
    </div>
</body>
</html>