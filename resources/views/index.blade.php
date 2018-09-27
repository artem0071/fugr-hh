<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>HH</title>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
    </head>
    <body style="background-color: #ececec;">

    @include('index.header')

    <div id="app" class="container py-5">
        @yield('content')
    </div>

    @include('index.footer')

    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>

    </body>
</html>
