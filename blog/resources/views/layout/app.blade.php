<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}" type="image/x-icon">

        <title>DC @yield('title', 'Comics')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href=" {{ asset('css/app.css') }} ">

    </head>
    <body>

        {{-- SITE HEADER --}}
        @include('partials.header')

        {{-- SITE_MAIN --}}
        <main id="main">
            @yield('content')
        </main>

        {{-- SITE FOOTER --}}
        @include('partials.footer')

    </body>
</html>