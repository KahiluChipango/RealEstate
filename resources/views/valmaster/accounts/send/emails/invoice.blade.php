<!DOCTYPE html>
<html>
<head>
    <title>Sherwood Grenne</title>
</head>
<body>
<h1>{{ $title }}</h1>
<p>{{ $body }}</p>

<p>Thank you</p>
</body>
</html>




{{--
@component('mail::message')
# Invoice

The body of your message.

@component('mail::button', ['url' => ''])
Download Invoice
@endcomponent

Thanks,<br>
Sherwood Greene Limited
@endcomponent
--}}
