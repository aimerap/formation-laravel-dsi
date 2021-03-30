@component('mail::message')
# Bienvenue Sur notre plateforme

Ceci est un mail test

@component('mail::button', ['url' => ''])
Connectez-vous
@endcomponent

Merci,<br>
{{ config('app.name') }}
@endcomponent
