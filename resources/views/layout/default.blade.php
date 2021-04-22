<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TPH</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">


</head>
<body>

//header

<x-global.header></x-global.header>


    <main class="container">

        @yield('content')
    </main>
</body>
</html>
