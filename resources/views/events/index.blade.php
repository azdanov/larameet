@extends('layouts.main')

@php
    /* @var App\Event[] $events */
@endphp

@section('heading')
    <h1>Events</h1>
    <p class="text-indigo-lightest">Find a suitable event to attend!</p>
@endsection

@section('content')
    <article class="lg:w-5/6 mx-auto">
        <div class="flex items-baseline mb-4 text-green-darkest">
            <h2>Currently Open</h2>
            <span class="mx-2">&dash;</span>
            {{ link_to_route('events.create', 'Create an Event', [], ['class' => 'no-underline text-indigo-dark hover:underline']) }}
        </div>
        <ul class="list-reset flex flex-wrap">
            @forelse ($events as $event)
                <li class="mb-4 md:w-1/2">
                    <a
                        href="{{ route('events.show', $event->slug) }}"
                        class="no-underline text-indigo-dark hover:underline"
                    >{{ $event->name }}</a>
                    <div class="flex items-center text-grey-darker">
                        <svg class="w-5 h-6 mr-1" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                  d="M12,11.5A2.5,2.5 0 0,1 9.5,9A2.5,2.5 0 0,1 12,6.5A2.5,2.5 0 0,1 14.5,9A2.5,2.5 0 0,1 12,11.5M12,2A7,7 0 0,0 5,9C5,14.25 12,22 12,22C12,22 19,14.25 19,9A7,7 0 0,0 12,2Z"></path>
                        </svg>
                        <span>{{ $event->venue }} ({{ $event->city }})</span>
                    </div>
                </li>
            @empty
                <li>No events found!</li>
            @endforelse
        </ul>
        <div class="my-2">
            {!! $events->links('vendor.pagination.tailwind') !!}
        </div>
    </article>

@endsection
