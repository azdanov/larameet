@extends('layouts.main')

@section('heading')
  <h1>Registered Users</h1>
@endsection

@php
  /** @var \App\User[] $users */
@endphp

@section('content')
  <ul class="text-xl">
    @forelse ($users as $user)
      <li>{{ $user->name }} ({{ $user->email }})</li>
    @empty
      <li>No registered users</li>
    @endforelse
  </ul>
@endsection
