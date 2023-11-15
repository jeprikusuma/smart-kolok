@component('mail::message')
# Welcome to Smart Kolok

Thank you for registering in the Smart Kolok application. Activate your account via the following activation button.

@component('mail::button', ['url' => url('/api/activation/'.$code)])
Aktivasi Akun
@endcomponent

If the button can not be clicked can copy the following link.
{{url('/api/activation/'.$code)}}

Best Regard,<br>
{{ config('app.name') }}
@endcomponent
