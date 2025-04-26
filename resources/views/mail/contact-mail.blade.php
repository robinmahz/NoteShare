<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form Submission</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        .header {
            text-align: center;
            margin-bottom: 30px;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px 8px 0 0;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .logo {
            max-width: 200px;
            height: auto;
            margin-bottom: 20px;
        }

        .content {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 0 0 8px 8px;
            margin-bottom: 30px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .footer {
            text-align: center;
            color: #666;
            font-size: 14px;
            border-top: 1px solid #eee;
            padding-top: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .field {
            margin-bottom: 15px;
        }

        .field-label {
            font-weight: bold;
            color: #2c3e50;
            background-color: #f8f9fa;
            padding: 8px 12px;
            border-radius: 4px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        td {
            padding: 12px;
            vertical-align: top;
        }

        .field-label {
            width: 120px;
        }

        .message-box {
            background-color: #f8f9fa;
            padding: 15px;
            border-radius: 4px;
            border-left: 4px solid #3498db;
            margin-top: 20px;
        }

        .greeting {
            color: #2c3e50;
            font-size: 18px;
            margin-bottom: 20px;
        }

        .contact-info {
            background-color: #f8f9fa;
            padding: 15px;
            border-radius: 4px;
            margin: 20px 0;
        }

        .button {
            display: inline-block;
            padding: 12px 24px;
            background-color: #3498db;
            color: #ffffff;
            text-decoration: none;
            border-radius: 4px;
            margin: 20px 0;
        }

        .company-name {
            color: #2c3e50;
            font-size: 24px;
            font-weight: bold;
            margin: 10px 0;
        }

        .social-links {
            margin: 20px 0;
        }

        .social-links a {
            color: #3498db;
            text-decoration: none;
            margin: 0 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <table>
            <tr>
                <td class="header" colspan="2">
                    <img src="{{ config('app.url') }}/images/logo/logo.png" alt="Noteshare" class="logo"
                        style="max-width: 200px; height: auto; margin-bottom: 20px;">
                    <div class="company-name">NoteShare</div>
                </td>
            </tr>
            <tr>
                <td class="content" colspan="2">
                    <div class="greeting">
                        {{ $isAdmin ? 'Dear Admin' : 'Dear ' . $contact->name }},
                    </div>

                    @if ($isAdmin)
                        <p>You have received a new message from the contact form on your website. Here are the details:
                        </p>

                        <table>
                            <tr>
                                <td class="field-label">Name:</td>
                                <td>{{ $contact->name }}</td>
                            </tr>
                            <tr>
                                <td class="field-label">Email:</td>
                                <td>{{ $contact->email }}</td>
                            </tr>
                            @unless ($contact->subject == null)
                                <tr>
                                    <td class="field-label">Subject:</td>
                                    <td>{{ $contact->subject }}</td>
                                </tr>
                            @endunless
                        </table>

                        <div class="message-box">
                            <strong>Message:</strong><br>
                            {{ $contact->message }}
                        </div>

                        {{-- <p>You can respond to this message by replying to this email.</p> --}}
                    @endif

                    @if (!$isAdmin)
                        <p>Thank you for reaching out to us through our website. We have received your message and will
                            get back to
                            you as soon as possible.</p>

                        <div class="contact-info">
                            <p>Our team is reviewing your inquiry, and we'll provide a response shortly.</p>
                        </div>

                        <p>We appreciate your interest and look forward to assisting you!</p>
                    @endif
                </td>
            </tr>
            <tr>
                <td class="footer" colspan="2">
                    <p>Best regards,</p>
                    <p><strong>The NoteShare Team</strong></p>
                    <div class="social-links">
                        <a href="{{ config('app.url') }}">Website</a>
                    </div>
                </td>
            </tr>
        </table>
    </div>
</body>

</html>
