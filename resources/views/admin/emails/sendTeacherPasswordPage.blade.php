@component('mail::message')
# Welcome to {{ config('app.name') }}

<b>Your Login Credentail:</b>
<br>
<br>

Hello, {{ ucfirst($data['name']) }}
<br>
Email : {{ $data['email'] }}
<br>
Password : {{ $data['randomPassword'] }}

<br>
@component('mail::button', ['url' => $data['urlLink'] ])
Login
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
