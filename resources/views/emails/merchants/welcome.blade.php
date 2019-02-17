@component('mail::message')
# {{ __('Welcome You in Yamamah') }}

{{__('Your account has been successfuly created || your password is')}}

Username : {{ $username }}

Password : {{ $password }}

@component('mail::button', ['url' => route('merchant.login')])
{{__('Login')}}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
