@extends('layouts.main')

@section('heading')
  <h1>Error: 404</h1>
  <p class="bg-indigo-light">There seems to to a problem.</p>
@endsection

@section('content')
  <section class="leading-normal">
    <p>The information you requested could not be found. <br>
      Maybe you can find what you were looking for by checking out:</p>
    <ul class="mt-2 mb-4">
      <li><a href="{{ route('events.index') }}"
             class="text-indigo hover:text-indigo-dark">Events</a></li>
      <li><a href="{{ route('locations.index') }}" class="text-indigo hover:text-indigo-dark">Locations</a>
      </li>
    </ul>

    <p>Feel free to
      <a href="{{ route('contact.index') }}" class="text-indigo hover:text-indigo-dark">
        contact us
      </a>
      for further assistance.
    </p>
  </section>
@endsection
