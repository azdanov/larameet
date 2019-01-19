@component('mail::message')
# A message from {{ $contact['name'] }} __({{ $contact['email'] }})__

{{ $contact['message'] }}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
