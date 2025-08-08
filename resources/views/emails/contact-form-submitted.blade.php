<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Form Submission</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 8px;
            padding: 30px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            background: linear-gradient(135deg, #3b82f6 0%, #8b5cf6 100%);
            color: white;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
            text-align: center;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
        }
        .field {
            margin-bottom: 15px;
            border-bottom: 1px solid #eee;
            padding-bottom: 10px;
        }
        .field-label {
            font-weight: bold;
            color: #555;
            margin-bottom: 5px;
        }
        .field-value {
            color: #333;
            word-wrap: break-word;
        }
        .message-field {
            background-color: #f8f9fa;
            padding: 15px;
            border-radius: 5px;
            border-left: 4px solid #3b82f6;
        }
        .footer {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #eee;
            font-size: 12px;
            color: #666;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>New Contact Form Submission</h1>
            <p style="margin: 0; opacity: 0.9;">{{ setting('site.name', 'Primary Care Clinic') }}</p>
        </div>

        <div class="field">
            <div class="field-label">Name:</div>
            <div class="field-value">{{ $formData['first_name'] ?? 'Not provided' }} {{ $formData['last_name'] ?? '' }}</div>
        </div>

        <div class="field">
            <div class="field-label">Email:</div>
            <div class="field-value">
                <a href="mailto:{{ $formData['email'] ?? 'Not provided' }}">{{ $formData['email'] ?? 'Not provided' }}</a>
            </div>
        </div>

        <div class="field">
            <div class="field-label">Phone:</div>
            <div class="field-value">
                @if(!empty($formData['phone']))
                    <a href="tel:{{ $formData['phone'] }}">{{ $formData['phone'] }}</a>
                @else
                    Not provided
                @endif
            </div>
        </div>

        <div class="field">
            <div class="field-label">Message:</div>
            <div class="field-value message-field">
                {{ $formData['message'] ?? 'No message provided' }}
            </div>
        </div>

        <div class="field">
            <div class="field-label">Submitted At:</div>
            <div class="field-value">{{ now()->format('F j, Y \a\t g:i A') }}</div>
        </div>

        <div class="footer">
            <p>This email was automatically generated from the contact form on {{ setting('site.name', 'Primary Care Clinic') }} website.</p>
            <p>Please respond to this inquiry promptly to maintain excellent patient service.</p>
        </div>
    </div>
</body>
</html>