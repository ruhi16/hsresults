@component('mail::message')
# Introduction

The body of your message, Hari Narayan Das.

Hello {{ $user['name'] }}
Your Email Address is {{ $user['email']}}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
