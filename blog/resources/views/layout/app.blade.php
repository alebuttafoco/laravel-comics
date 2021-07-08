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
        <header id="header">
            {{-- top header --}}
            <div class="header__top">
                <div class="container">
                    <span>powered by VISA</span>
                    <span>additional DC sites</span>
                </div>
            </div>

            {{-- navbar --}}
            <nav class="nav container">
                {{-- logo --}}
                <div class="logo">
                    <img class="logo__img" src="./img/dc-logo.png" alt="">
                </div>

                {{-- links --}}
                <div class="links">
                    <a href=" {{route('characters')}} "  class=" {{Route::currentRouteName() == 'characters' ? 'active' : ''}} ">characters</a>
                    <a href=" {{route('comics')}} " class=" {{Route::currentRouteName() == 'comics' ? 'active' : ''}} ">comics</a>
                    <a href=" {{route('movies')}} "  class=" {{Route::currentRouteName() == 'movies' ? 'active' : ''}} ">movies</a>
                    <a href=" {{route('tv')}} "  class=" {{Route::currentRouteName() == 'tv' ? 'active' : ''}} ">tv</a>
                    <a href=" {{route('games')}} "  class=" {{Route::currentRouteName() == 'games' ? 'active' : ''}} ">games</a>
                    <a href=" {{route('collectibles')}} "  class=" {{Route::currentRouteName() == 'collectibles' ? 'active' : ''}} ">collectibles</a>
                    <a href=" {{route('videos')}} "  class=" {{Route::currentRouteName() == 'videos' ? 'active' : ''}} ">videos</a>
                    <a href=" {{route('fans')}} "  class=" {{Route::currentRouteName() == 'fans' ? 'active' : ''}} ">fans</a>
                    <a href=" {{route('news')}} "  class=" {{Route::currentRouteName() == 'news' ? 'active' : ''}} ">news</a>
                    <a href=" {{route('shop')}} "  class=" {{Route::currentRouteName() == 'shop' ? 'active' : ''}} ">shop</a>
                </div>

                {{-- search input --}}
                <div class="search_box">
                    <input type="text" name="search_input" id="search_input" placeholder="Search">
                </div>

            </nav>

            <div class="jumbotron"></div>

        </header>

        {{-- SITE_MAIN --}}
        <main id="main">MAIN CONTENT</main>

        {{-- SITE FOOTER --}}
        <footer id="footer">FOOTER CONTENT</footer>

    </body>
</html>