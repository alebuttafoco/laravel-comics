<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href=" {{ asset('css/app.css') }} ">
    </head>
    <body>

        {{-- SITE HEADER --}}
        <header id="site_header">HEADER CONTENT</header>

        {{-- SITE_MAIN --}}
        <main id="site_main">MAIN CONTENT</main>

        {{-- SITE FOOTER --}}
        <footer id="site_footer">FOOTER CONTENT</footer>

    </body>
</html>