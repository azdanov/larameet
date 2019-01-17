@extends('layouts.main')

@php
    /* @var App\Event $event */
@endphp

@section('heading')
    <h1>Events</h1>
@endsection

@section('content')
    <div class="px-4 md:px-0 md:w-3/4 mx-auto my-3">
        <div class="flex justify-center items-baseline">
            <h2 class="text-grey-darkest text-center mb-4">Editing Event</h2>
            <span class="mx-2">&dash;</span>
            {{ link_to_route('events.show', 'Back to Event', ['event' => $event],
                    ['class' => 'no-underline text-indigo-dark hover:underline']) }}
        </div>
        {!! Form::open(['route' => ['events.update', $event->slug], 'method' => 'put']) !!}
        <div class="md:flex md:items-center mb-4">
            <div class="md:w-1/3">
                {!!Form::label('name', 'Event Name', [
                    'class' => 'block text-grey-dark font-bold md:text-right mb-1 md:mb-0 pr-4' . ($errors->first('name') ? ' text-red-light' : '') ])
                !!}
            </div>
            <div class="md:w-2/3">
                {!! Form::text('name', $event->name, [
                    'class' => 'bg-grey-lightest appearance-none border-2 border-grey-lighter rounded w-full py-2 px-4 text-grey-darker leading-tight focus:outline-none focus:bg-white focus:border-indigo' . ($errors->first('name') ? ' border-red-light' : ''),
                    'placeholder' => 'Laravel and Pancakes' ])
                !!}
            </div>
        </div>
        <div class="md:flex md:items-center mb-4">
            <div class="md:w-1/3">
                {!! Form::label('max_attendees', 'Maximum Number of Attendees (including organizers)', [
                    'class' => 'block text-grey-dark font-bold md:text-right mb-1 md:mb-0 pr-4'  . ($errors->first('max_attendees') ? ' text-red-light' : '')])
                !!}
            </div>
            <div class="md:w-2/3">
                {!! Form::select('max_attendees', [2,3,4,5,6,7,8,9,10], $event->max_attendees, [
                    'placeholder' => 'Maximum Number of Attendees',
                    'class' => 'bg-grey-lightest appearance-none border-2 border-grey-lighter rounded w-full py-2 px-4 text-grey-darker leading-tight focus:outline-none focus:bg-white focus:border-indigo'  . ($errors->first('max_attendees') ? ' border-red-light' : '') ])
                !!}
            </div>
        </div>
        <div class="md:flex md:items-center mb-4">
            <div class="md:w-1/3">
                {!!Form::label('venue', 'Venue', [
                    'class' => 'block text-grey-dark font-bold md:text-right mb-1 md:mb-0 pr-4'  . ($errors->first('venue') ? ' text-red-light' : '') ])
                !!}
            </div>
            <div class="md:w-2/3">
                {!! Form::text('venue', $event->venue, [
                    'class' => 'bg-grey-lightest appearance-none border-2 border-grey-lighter rounded w-full py-2 px-4 text-grey-darker leading-tight focus:outline-none focus:bg-white focus:border-indigo'  . ($errors->first('venue') ? ' border-red-light' : ''),
                    'placeholder' => 'Pancakes and Stars Cafe' ])
                !!}
            </div>
        </div>
        <div class="md:flex md:items-center mb-5">
            <div class="md:w-1/3">
                {!! Form::label('description', 'Description', [
                    'class' => 'block text-grey-dark font-bold md:text-right mb-1 md:mb-0 pr-4'  . ($errors->first('description') ? ' text-red-light' : '')])
                !!}
            </div>
            <div class="md:w-2/3">
                {!! Form::textarea('description', $event->description, [
                    'placeholder' => 'Describe the event',
                    'class' => 'bg-grey-lightest appearance-none border-2 border-grey-lighter rounded w-full py-2 px-4 text-grey-darker leading-tight focus:outline-none focus:bg-white focus:border-indigo'  . ($errors->first('description') ? ' border-red-light' : ''),
                    'rows' => '4' ])
                !!}
            </div>
        </div>
        <div class="md:flex md:items-center">
            <div class="md:w-1/3"></div>
            <div class="md:w-2/3">
                {!! Form::button('Submit', [
                    'class' => 'shadow bg-indigo hover:bg-indigo-light focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded',
                    'type' => 'submit' ])
                !!}
            </div>
        </div>
        {!! Form::close() !!}
    </div>
@endsection
