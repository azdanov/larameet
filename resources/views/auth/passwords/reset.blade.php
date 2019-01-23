@extends('layouts.main')

@section('content')
  <div class="px-4 md:px-0 md:w-3/5 lg:w-2/5 mx-auto my-3 mb-5">
    {!! Form::open(['route' => 'password.update']) !!}
    {!! Form::hidden('token', $token) !!}
    <div class="md:flex md:items-center mb-1">
      <div class="md:w-1/3"></div>
      <div class="md:w-2/3">
        <div
            class="flex justify-center md:justify-start items-center mb-3 text-grey-darker">
          <h2>Reset Password</h2>
        </div>
      </div>
    </div>
    <div class="md:flex md:items-center mb-4">
      <div class="md:w-1/3">
        {!!Form::label('email', 'Email', [
            'class' => 'block text-grey-dark font-bold md:text-right mb-1 md:mb-0 pr-4' . ($errors->first('email') ? ' text-red-light' : '') ])
        !!}
      </div>
      <div class="md:w-2/3">
        {!! Form::email('email', null, [
            'class' => 'bg-grey-lightest appearance-none border-2 border-grey-lighter rounded w-full py-2 px-4 text-grey-darker leading-tight focus:outline-none focus:bg-white focus:border-indigo' . ($errors->first('email') ? ' border-red-light' : ''),
            'placeholder' => 'user@example.com' ])
        !!}
      </div>
    </div>
    <div class="md:flex md:items-center mb-5">
      <div class="md:w-1/3">
        {!! Form::label('password', 'Password', [
            'class' => 'block text-grey-dark font-bold md:text-right mb-1 md:mb-0 pr-4'  . ($errors->first('password') ? ' text-red-light' : '')])
        !!}
      </div>
      <div class="md:w-2/3">
        {!! Form::password('password', [
            'placeholder' => '***********',
            'class' => 'bg-grey-lightest appearance-none border-2 border-grey-lighter rounded w-full py-2 px-4 text-grey-darker leading-tight focus:outline-none focus:bg-white focus:border-indigo'  . ($errors->first('password') ? ' border-red-light' : '') ])
        !!}
      </div>
    </div>
    <div class="md:flex md:items-center mb-5">
      <div class="md:w-1/3">
        {!! Form::label('password_confirmation', 'Password', [
            'class' => 'block text-grey-dark font-bold md:text-right mb-1 md:mb-0 pr-4'  . ($errors->first('password_confirmation') ? ' text-red-light' : '')])
        !!}
      </div>
      <div class="md:w-2/3">
        {!! Form::password('password_confirmation', [
            'placeholder' => '***********',
            'class' => 'bg-grey-lightest appearance-none border-2 border-grey-lighter rounded w-full py-2 px-4 text-grey-darker leading-tight focus:outline-none focus:bg-white focus:border-indigo'  . ($errors->first('password_confirmation') ? ' border-red-light' : '') ])
        !!}
      </div>
    </div>
    <div class="md:flex md:items-center">
      <div class="md:w-1/3"></div>
      <div class="md:w-2/3">
        {!! Form::button('Reset', [
            'class' => 'shadow bg-indigo hover:bg-indigo-light focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded',
            'type' => 'submit' ])
        !!}
      </div>
    </div>
    {!! Form::close() !!}
  </div>
@endsection
