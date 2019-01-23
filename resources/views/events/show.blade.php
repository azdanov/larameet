@extends('layouts.main')

@php
  /** @var App\Event $event */
@endphp

@section('heading')
  <h1>Events</h1>
@endsection

@section('content')
  <article class="leading-loose w-3/4 mx-auto">
    <section class="mb-1 text-grey-darkest">
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
      <p class="flex items-center">
        <svg class="w-5 h-6 mr-1" viewBox="0 0 24 24">
          <path fill="currentColor"
                d="M19,15H17V13H19M19,19H17V17H19M13,7H11V5H13M13,11H11V9H13M13,15H11V13H13M13,19H11V17H13M7,11H5V9H7M7,15H5V13H7M7,19H5V17H7M15,11V5L12,2L9,5V7H3V21H21V11H15Z"></path>
        </svg>
        City: {{ $event->city }}
      </p>
      <p class="flex items-center">
        <svg class="w-5 h-6 mr-1" viewBox="0 0 24 24">
          <path fill="currentColor"
                d="M12,11.5A2.5,2.5 0 0,1 9.5,9A2.5,2.5 0 0,1 12,6.5A2.5,2.5 0 0,1 14.5,9A2.5,2.5 0 0,1 12,11.5M12,2A7,7 0 0,0 5,9C5,14.25 12,22 12,22C12,22 19,14.25 19,9A7,7 0 0,0 12,2Z"></path>
        </svg>
        Venue: {{ $event->venue }}
      </p>
      <p class="flex items-center">
        <svg class="w-5 h-6 mr-1" viewBox="0 0 24 24">
          <path fill="currentColor"
                d="M12,3L2,12H5V20H19V12H22L12,3M12,8A3,3 0 0,1 15,11H13A1,1 0 0,0 12,10A1,1 0 0,0 11,11V13H16V17H8V13H9V11A3,3 0 0,1 12,8Z"></path>
        </svg>
        Status: {{ $event->published ? 'Open' : 'Closed' }}
      </p>
      <p class="flex items-center">
        <svg class="w-5 h-6 mr-1" viewBox="0 0 24 24">
          <path fill="currentColor"
                d="M16,9C18.33,9 23,10.17 23,12.5V15H17V12.5C17,11 16.19,9.89 15.04,9.05L16,9M8,9C10.33,9 15,10.17 15,12.5V15H1V12.5C1,10.17 5.67,9 8,9M8,7A3,3 0 0,1 5,4A3,3 0 0,1 8,1A3,3 0 0,1 11,4A3,3 0 0,1 8,7M16,7A3,3 0 0,1 13,4A3,3 0 0,1 16,1A3,3 0 0,1 19,4A3,3 0 0,1 16,7M9,16.75V19H15V16.75L18.25,20L15,23.25V21H9V23.25L5.75,20L9,16.75Z"></path>
        </svg>
        Max Attendees: {{ $event->max_attendees }}
      </p>
    </section>
    <section>
      <h3>Description</h3>
      <p>{{ $event->description }}</p>
    </section>
  </article>
@endsection
