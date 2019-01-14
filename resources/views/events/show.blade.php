@extends('layouts.main')

@php
/** @var App\Event $event */
@endphp

@section('heading')
    <h1>Events</h1>
@endsection

@section('content')
    <article class="leading-loose">
        <section class="mb-1">
            <h2>{{ $event->name }}</h2>
            <p>City: {{ $event->city }}</p>
            <p>Venue: {{ $event->venue }}</p>
            <p>Status: {{ $event->published ? 'Open' : 'Closed' }}</p>
        </section>
        <section>
            <h3>Description</h3>
            <p>{{ $event->description }}</p>
        </section>
    </article>
@endsection
