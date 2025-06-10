<! DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title', env('APP_NAME'))</title>
        <link rel="icon" href="{{ asset('images/unityLogo.svg') }}" type="image/svg+xml">
        @vite('resources/css/app.css')
        <link href="{{ asset('css/fontawesome.css') }}" rel="stylesheet">
        <link href="{{ asset('css/home.css') }}" rel="stylesheet">
        <link href="{{ asset('css/swiper.css') }}" rel="stylesheet">
        <link href="{{ asset('css/hover.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
        @yield('css')
    </head>


    <body class="font-jakarta">

        @include('layouts.nav')
        @yield('content')
        @include('layouts.footer')

        <script src="{{ asset('js/fontawesome.js') }}"></script>
        <script src="{{ asset('js/home.js') }}"></script>
        <script src="{{ asset('js/language.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        @yield('script')

    </body>

    </html>
