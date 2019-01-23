@extends('layouts.main')

@section('heading')
  <h1>Contact</h1>
@endsection

@section('content')
  <div class="flex flex-wrap justify-around">
    <div class="px-4 w-full md:w-2/3 my-3">
      <h2 class="text-grey-darkest text-center mb-4">Contact Us</h2>
      {!! Form::open(['route' => 'contact.store', 'id' => 'contact-form']) !!}
      <div class="md:flex md:items-center mb-5">
        <div class="md:w-1/3">
          {!! Form::label('name', 'Name', [
              'class' => 'block text-grey-dark font-bold md:text-right mb-1 md:mb-0 pr-4'  . ($errors->first('description') ? ' text-red-light' : '')]) !!}
        </div>
        <div class="md:w-2/3">
          {!! Form::text('name', null, [
              'class' => 'bg-grey-lightest appearance-none border-2 border-grey-lighter rounded w-full py-2 px-4 text-grey-darker leading-tight focus:outline-none focus:bg-white focus:border-indigo'  . ($errors->first('description') ? ' border-red-light' : '')]) !!}
        </div>
      </div>
      <div class="md:flex md:items-center mb-5">
        <div class="md:w-1/3">
          {!! Form::label('email', 'E-Mail', [
              'class' => 'block text-grey-dark font-bold md:text-right mb-1 md:mb-0 pr-4'  . ($errors->first('description') ? ' text-red-light' : '')]) !!}
        </div>
        <div class="md:w-2/3">
          {!! Form::text('email', null, [
              'class' => 'bg-grey-lightest appearance-none border-2 border-grey-lighter rounded w-full py-2 px-4 text-grey-darker leading-tight focus:outline-none focus:bg-white focus:border-indigo'  . ($errors->first('description') ? ' border-red-light' : '')]) !!}
        </div>
      </div>
      <div class="md:flex md:items-center mb-5">
        <div class="md:w-1/3">
          {!! Form::label('message', 'Message', [
              'class' => 'block text-grey-dark font-bold md:text-right mb-1 md:mb-0 pr-4'  . ($errors->first('description') ? ' text-red-light' : '')]) !!}
        </div>
        <div class="md:w-2/3">
          {!! Form::textarea('message', null, [
              'class' => 'bg-grey-lightest appearance-none border-2 border-grey-lighter rounded w-full py-2 px-4 text-grey-darker leading-tight focus:outline-none focus:bg-white focus:border-indigo'  . ($errors->first('description') ? ' border-red-light' : ''),
              'rows' => 4]) !!}
        </div>
      </div>
      <div class="md:flex md:items-center">
        <div class="md:w-1/3"></div>
        <div class="md:w-2/3">
          {!! NoCaptcha::displaySubmit('contact-form', 'Submit!', ['class' => 'shadow bg-indigo hover:bg-indigo-light focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded']) !!}
        </div>
      </div>
      {!! Form::close() !!}
    </div>
    <div class="px-4 w-3/4 md:w-1/3 my-3 flex flex-col justify-start items-center">
      <h2 class="text-grey-darkest text-center mb-2">Our Office</h2>
      <a href="https://upload.wikimedia.org/wikipedia/commons/a/a9/Long_and_Loop_Street_map.svg">
        <img
            class="rounded-full md:w-64 shadow"
            src="https://upload.wikimedia.org/wikipedia/commons/a/a9/Long_and_Loop_Street_map.svg"
            alt="Map of a city where our office is located">
      </a>
    </div>
  </div>
@endsection

{!! NoCaptcha::renderJs() !!}
