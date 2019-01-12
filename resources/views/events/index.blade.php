@extends('layouts.main')

@php
    /* @var string[] $events */
@endphp

@section('heading')
    <h1>Events</h1>
    <p class="text-indigo-lightest">Find a suitable event to attend!</p>
@endsection

@section('content')
    <h2>Currently Open:</h2>
    <ul class="list-reset">
        @forelse ($events as $event)
            <li>{{ $event->name }}</li>
        @empty
            <li>No events found!</li>
        @endforelse
    </ul>
    <div class="mt-3 mb-1">
        {!! $events->links('vendor.pagination.tailwind') !!}
    </div>
@endsection
