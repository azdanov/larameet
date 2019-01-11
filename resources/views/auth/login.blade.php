@extends('layouts.main')

@section('content')
    <div class="w-full flex justify-center my-6">
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex-grow max-w-xs"
              method="POST"
              action="{{ route('login') }}">
            @csrf
            <div class="flex items-center mb-3 text-grey-darker">
                <h2>Login</h2>
                <span class="mx-3">|</span>
                <a href="{{ route('register') }}" class="text-lg text-grey-darker">Register?</a>
            </div>
            <div class="mb-3">
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
            <div class="mb-3">
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
            <div class="mb-4">
                <label class="md:w-2/3 block text-grey-darker font-bold flex items-baseline">
                    <input type="checkbox" name="remember" class="mr-2 leading-tight"
                           id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <span class="text-sm">
                        Remember Me
                    </span>
                </label>
            </div>
            <div class="flex items-center justify-between">
                <button
                    class="bg-indigo hover:bg-indigo-dark text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="submit">
                    Login
                </button>
                <a class="inline-block align-baseline font-bold text-sm text-indigo hover:text-indigo-dark"
                   href="{{ route('password.request') }}">
                    Reset Password
                </a>
            </div>
        </form>
    </div>
@endsection
