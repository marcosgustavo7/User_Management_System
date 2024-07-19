<x-mail::message>
# Instructions

If you are receiving this, so you have your account locked by our system.
Follow the buttom bellow to resolve this.

@component('mail::button', ['url' => $unlockUrl, 'color' => 'primary'])
        Unlock Account
    @endcomponent
Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
