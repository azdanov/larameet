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

<body>
<div>
    @yield('content')
</div>

<div>
    @section('advertisement')
        <p>Buy LaraMeet swag from our store!</p>
    @show
</div>

</body>

</html>
