@extends('layouts.main')

@section('content')
    <div class="w-full flex justify-center my-6">
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex-grow max-w-xs"
              method="POST"
              action="{{ route('register') }}">
            @csrf
            <div class="flex items-center mb-3 text-grey-darker">
                <h2>Register</h2>
                <span class="mx-3">|</span>
                <a href="{{ route('login') }}" class="text-lg text-grey-darker">Login?</a>
            </div>
            <div class="mb-2">
                <label class="block text-grey-darker text-sm font-bold mb-2" for="name">
                    Name
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker leading-tight focus:outline-none focus:shadow-outline{{$errors->has('name') ? ' border-red mb-2' : ''}}"
                    id="name" type="text" name="name" placeholder="Name"
                    value="{{ old('name') }}" required>
                @if ($errors->has('name'))
                    <p role="alert" class="text-red text-xs italic">{{ $errors->first('name') }}</p>
                @endif
            </div>
            <div class="mb-2">
                <label class="block text-grey-darker text-sm font-bold mb-2" for="email">
                    Email
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker leading-tight focus:outline-none focus:shadow-outline{{$errors->has('email') ? ' border-red mb-2' : ''}}"
                    id="email" type="email" name="email" placeholder="Email"
                    value="{{ old('email') }}" required>
                @if ($errors->has('email'))
                    <p role="alert"
                       class="text-red text-xs italic">{{ $errors->first('email') }}</p>
                @endif
            </div>
            <div class="mb-2">
                <label class="block text-grey-darker text-sm font-bold mb-2" for="password">
                    Password
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker leading-tight focus:outline-none focus:shadow-outline{{$errors->has('password') ? ' border-red mb-2' : ''}}"
                    id="password" type="password" name="password" required
                    placeholder="******************">
                @if ($errors->has('password'))
                    <p class="text-red text-xs italic">{{ $errors->first('password') }}</p>
                @endif
            </div>
            <div class="mb-5">
                <label class="block text-grey-darker text-sm font-bold mb-2"
                       for="password_confirmation">
                    Confirm Password
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker leading-tight focus:outline-none focus:shadow-outline{{$errors->has('password') ? ' border-red mb-2' : ''}}"
                    id="password_confirmation" type="password" name="password_confirmation"
                    required
                    placeholder="******************">
            </div>
            <button
                class="bg-indigo hover:bg-indigo-dark text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                type="submit">
                Register
            </button>
        </form>
    </div>
@endsection
