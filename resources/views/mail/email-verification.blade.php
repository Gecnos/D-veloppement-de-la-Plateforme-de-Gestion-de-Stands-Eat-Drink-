<x-mail::message>
# Bienvenue

Bonjour {{ $name }}.

<x-mail::button :url="''">
Cliquer ici
</x-mail::button>

Merci,<br>
{{ config('app.name') }}
</x-mail::message>
