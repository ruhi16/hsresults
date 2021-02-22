@component('mail::message')
# Introduction, Welcome & Verification Mail

The body of your message, {{ $user['name'] }}.

Hello {{ $user['name'] }}
Your Email Address is {{ $user['email']}}

Your Email OTP is: {{ $user['email_otp'] }}
<br>Your Email Verification Likn is: <a href="{{ url("/api/verify_email", [$user['email_verified_link']]) }}">Click to verify!!!</a>

@component('mail::button', ['url' => url("/api/verify_email", [$user["email_verified_link"]]) ])
Click to Verify
@endcomponent

Thanks,<br>
{{ config('app.name') }} Team
@endcomponent
