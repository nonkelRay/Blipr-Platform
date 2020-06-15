<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">



    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>{{ config('app.name', 'Blipr') }}</title>
</head>
<body class="platform platform-venue">
    <div id="app">
        @include('partials.header-venue')
        @include('partials.mobile-nav-venue')
        <main class="main main-venue">
            @yield('content')
        </main>
    </div>
</body>
</html>
