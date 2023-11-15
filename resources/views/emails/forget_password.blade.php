@component('mail::message')
# Reset Password

We accept a password reset request from your account. The password can be reset via the following button. If you never made a password reset request, this message can be ignored.

@component('mail::button', ['url' => url('/forget-password/'.$code)])
Reset Password
@endcomponent

If the button can not be clicked can copy the following link.
{{url('/forget-password/'.$code)}}

Best Regard,<br>
{{ config('app.name') }}
@endcomponent
