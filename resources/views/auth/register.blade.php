@extends('layouts.main')

@section('content')
    <div class="px-4 md:px-0 md:w-3/5 lg:w-2/5 mx-auto my-3 mb-5">
        <div class="text-center">
            <a href="{{ route('login.github') }}"
               class="inline-flex items-center text-md px-4 py-2 leading-none border rounded text-grey-darkest border-grey-darkest hover:border-transparent hover:text-white hover:bg-grey-darkest mt-4 md:mt-0 no-underline">
                <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24">
                    <path fill="currentColor"
                          d="M5,3H19A2,2 0 0,1 21,5V19A2,2 0 0,1 19,21H14.56C14.24,20.93 14.23,20.32 14.23,20.11L14.24,17.64C14.24,16.8 13.95,16.25 13.63,15.97C15.64,15.75 17.74,15 17.74,11.53C17.74,10.55 17.39,9.74 16.82,9.11C16.91,8.89 17.22,7.97 16.73,6.73C16.73,6.73 15.97,6.5 14.25,7.66C13.53,7.46 12.77,7.36 12,7.35C11.24,7.36 10.46,7.46 9.75,7.66C8.03,6.5 7.27,6.73 7.27,6.73C6.78,7.97 7.09,8.89 7.18,9.11C6.61,9.74 6.26,10.55 6.26,11.53C6.26,15 8.36,15.75 10.36,16C10.1,16.2 9.87,16.6 9.79,17.18C9.27,17.41 7.97,17.81 7.17,16.43C7.17,16.43 6.69,15.57 5.79,15.5C5.79,15.5 4.91,15.5 5.73,16.05C5.73,16.05 6.32,16.33 6.73,17.37C6.73,17.37 7.25,19.12 9.76,18.58L9.77,20.11C9.77,20.32 9.75,20.93 9.43,21H5A2,2 0 0,1 3,19V5A2,2 0 0,1 5,3Z"></path>
                </svg>
                Register with GitHub
            </a>
        </div>
        <hr class="border-b-2 my-8 border-grey-lighter">
        {!! Form::open(['route' => 'register']) !!}
        <div class="md:flex md:items-center mb-1">
            <div class="md:w-1/3"></div>
            <div class="md:w-2/3">
                <div class="flex justify-center md:justify-start items-center mb-3 text-grey-darker">
                    <h2>Register</h2>
                    <span class="mx-3">|</span>
                    <a href="{{ route('login') }}" class="text-lg text-grey-darker">Login?</a>
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
        <div class="md:flex md:items-center mb-4">
            <div class="md:w-1/3">
                {!!Form::label('name', 'Full Name', [
                    'class' => 'block text-grey-dark font-bold md:text-right mb-1 md:mb-0 pr-4' . ($errors->first('name') ? ' text-red-light' : '') ])
                !!}
            </div>
            <div class="md:w-2/3">
                {!! Form::text('name', null, [
                    'class' => 'bg-grey-lightest appearance-none border-2 border-grey-lighter rounded w-full py-2 px-4 text-grey-darker leading-tight focus:outline-none focus:bg-white focus:border-indigo' . ($errors->first('name') ? ' border-red-light' : ''),
                    'placeholder' => 'user@example.com' ])
                !!}
            </div>
        </div>
        <div class="md:flex md:items-center mb-4">
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
                {!! Form::label('password_confirmation', 'Password Confirmation', [
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
                {!! Form::button('Register', [
                    'class' => 'shadow bg-indigo hover:bg-indigo-light focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded',
                    'type' => 'submit' ])
                !!}
            </div>
        </div>
        {!! Form::close() !!}
    </div>
@endsection
