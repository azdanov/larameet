<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to LaraMeet</title>
    {!! Html::style(mix('css/app.css')) !!}
    {!! Html::script(mix('js/app.js'), ['defer']) !!}
</head>

<body class="min-h-screen flex flex-col font-sans">
@include('partials._menu')

<main class="flex-grow">
    <div class="pt-2 pb-3 bg-indigo-light text-center shadow">
        <div class="container mx-auto text-white leading-normal">
            @section('heading')
                <h1>LaraMeet</h1>
            @show
        </div>
    </div>

    @include('flash::message')

    <div class="container mx-auto py-3 leading-normal">
        @yield('content')
    </div>
</main>

@include('partials._footer')
</body>

</html>
