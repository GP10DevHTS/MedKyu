<x-mail::message>
Greetings!

We are delighted to extend an invitation for you to join the Parieng Hospital system as a Doctor. Welcome aboard!

To accept the invitation and set up your account, simply click the button below:

@component('mail::button', ['url' => route('login')])
    Accept Invitation
@endcomponent

Your default password is:

{{ $passwd }}


If you were not expecting this invitation or think it is a mistake, you can disregard this email.

Regards,
The Parieng Hospital Team


</x-mail::message>
