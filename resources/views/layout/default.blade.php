<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TPH</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <script src="{{ mix('js/app.js') }}" defer></script>


</head>
<body >

    <div class="container">
        <x-global.header></x-global.header>
    </div>
    <main id="app">
        @yield('content')
    </main>


<x-global.footer></x-global.footer>

</body>
</html>
