@extends('layouts.main')

@php
/** @var App\Event $event */
@endphp

@section('heading')
    <h1>Events</h1>
@endsection

@section('content')
    <article class="leading-loose w-3/4 mx-auto">
        <section class="mb-1">
            <div class="flex items-baseline text-indigo-dark">
                <h2 class="text-indigo-darkest">{{ $event->name }}</h2>
                <span class="mx-2">&dash;</span>
                {{ link_to_route('events.edit', 'Edit Event', ['event' => $event],
                    ['class' => 'no-underline text-indigo-dark hover:underline']) }}
                <span class="mx-2">&dash;</span>
                {!! Form::open(['route' => ['events.destroy', $event], 'method' => 'delete']) !!}
                    {!! Form::button('Delete Event', ['class' => 'no-underline text-red-dark hover:underline', 'type' => 'submit']) !!}
                {!! Form::close() !!}
            </div>
            <p>City: {{ $event->city }}</p>
            <p>Venue: {{ $event->venue }}</p>
            <p>Status: {{ $event->published ? 'Open' : 'Closed' }}</p>
            <p>Max Attendees: {{ $event->max_attendees }}</p>
        </section>
        <section>
            <h3>Description</h3>
            <p>{{ $event->description }}</p>
        </section>
    </article>
@endsection
