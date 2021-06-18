@component('mail::message')
# Hallo!

U bent bij deze uitgenodigd om een afspraak te maken bij de kledingbank.

@component('mail::button', ['url' => 'http://127.0.0.2/events/create'])
Afspraak Maken
@endcomponent

Met vriendelijke groeten,<br>
Kledingbank Zeeland
@endcomponent
