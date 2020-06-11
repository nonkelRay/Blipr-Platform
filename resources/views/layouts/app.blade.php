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
        {{-- @if ( (request()->is('venue/*')) )
            @include('partials.header-venue')
            @include('partials.mobile-nav-venue')
        @else --}}
            @include('partials.mobile-nav')
            @include('partials.header-home')
        {{-- @endif --}}
        

        <main class="main">
            @yield('content')
        </main>
    </div>
    
    
    
    {{-- @if ( !(request()->is('venue/*')) ) --}}
        @include('partials.mobile-footer')
        @include('partials.footer-home')
    {{-- @endif --}}
</body>
</html>
