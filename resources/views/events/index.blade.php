@php
/* @var string[] $events */
@endphp

<table>
    @each('partials._row', $events, 'event')
</table>
