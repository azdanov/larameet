@extends('layouts.main')

@php
    /* @var App\Event[] $events */
@endphp

@section('heading')
    <h1>Events</h1>
    <p class="text-indigo-lightest">Find a suitable event to attend!</p>
@endsection

@section('content')
    <h2>Currently Open:</h2>
    <ul class="list-reset">
        @forelse ($events as $event)
            <li>
                <a
                    href="{{ route('events.show', $event->slug) }}"
                    class="no-underline text-indigo-dark hover:underline"
                >{{ $event->name }}</a>
            </li>
        @empty
            <li>No events found!</li>
        @endforelse
    </ul>
    <div class="mt-3 mb-1">
        {!! $events->links('vendor.pagination.tailwind') !!}
    </div>
@endsection
