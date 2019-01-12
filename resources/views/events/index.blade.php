@extends('layouts.main')

@php
    /* @var string[] $events */
@endphp

@section('heading')
    <h1>Events</h1>
    <p class="text-indigo-lightest">Find a suitable event to attend!</p>
@endsection

@section('content')
    <table>
        @each('partials._row', $events, 'event')
    </table>
@endsection
