<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to LaraMeet</title>
    {!! Html::style('css/app.css') !!}
    {!! Html::script('js/app.js', ['defer']) !!}
</head>

<body class="min-h-screen flex flex-col font-sans">
@include('partials._menu')

<main class="flex-grow">
    <div class="p-4 bg-indigo-light text-center shadow">
        <div class="container mx-auto text-indigo-lightest">
            @section('heading')
                <h1 class="text-white">LaraMeet</h1>
            @show
        </div>
    </div>

    <div class="container mx-auto">
        @yield('content')
    </div>
</main>

@include('partials._footer')
</body>

</html>
