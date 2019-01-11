@extends('layouts.main')

@php
    /* @var string[] $events */
@endphp


@section('heading')
    <h1 class="text-white">Events</h1>
@endsection

@section('content')
    <table>
        @each('partials._row', $events, 'event')
    </table>
@endsection
