<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Blipr') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="platform">
    <div id="app">
        @if ( (request()->is('user/*')) )
            @include('partials.header-app')
            @include('partials.mobile-nav-app')
            @include('partials.vertical-nav-app')
        @else
            @include('partials.mobile-nav')
            @include('partials.header-home')
        @endif
        

        <main class="main {{ (request()->is('user/*')) ? 'main-app' : '' }}">
            @yield('content')
        </main>
    </div>
    
    
    
    @if ( !(request()->is('user/*')) )
        @include('partials.mobile-footer')
        @include('partials.footer-home')
    @endif
</body>
</html>
