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
        <footer id="footer">
            <div class="container">

                {{-- links --}}
                <div class="links_box">
                    <div class="links">
                        <div class="comics_and_shop">
                            <h2 class="footer_title">dc comics</h2>
                            <a href="{{route('characters')}}">characters</a>
                            <a href="{{route('comics')}}">comics</a>
                            <a href="{{route('movies')}}">movies</a>
                            <a href="{{route('tv')}}">tv</a>
                            <a href="{{route('games')}}">games</a>
                            <a href="{{route('videos')}}">videos</a>
                            <a href="{{route('news')}}">news</a>
    
                            <h2 class="footer_title">shop now</h2>
                            <a href="{{route('shop')}}">shop dc</a>
                            <a href="{{route('collectibles')}}">shop dc collectibles</a>
                        </div>
    
                        <div class="dc">
                            <h2 class="footer_title">dc</h2>
                            <a href="#">Terms of Use</a>
                            <a href="#">Privacy policy (new)</a>
                            <a href="#">Ad choices</a>
                            <a href="#">Advertising</a>
                            <a href="#">Jobs</a>
                            <a href="#">Subscriptions</a>
                            <a href="#">Talent Workshop</a>
                            <a href="#">CPFC Certificates</a>
                            <a href="#">Ratings</a>
                            <a href="#">Shop Help</a>
                            <a href="#">Contact Us</a>
                        </div>
    
                        <div class="sites">
                            <h2 class="footer_title">sites</h2>
                            <a href="#">DC</a>
                            <a href="#">MAD Magazine (new)</a>
                            <a href="#">DC Kids</a>
                            <a href="#">DC Universe</a>
                            <a href="#">DC Power Visa</a>
                        </div>
                    </div>
    
                    {{-- rights --}}
                    <div class="rights">
                        <p>All site content TM and 2020 DC Entertainment, unless otherwise <a class="link--special">noted here</a>. All rights reserved.</p>
                        <a href="#" class="link--special">Cookies Settings</a>
                    </div>
                </div>
    
                {{-- logo --}}
                <div class="logo--big">
                    <img src="./img/dc-logo-bg.png" alt="">
                </div>

            </div>
        </footer>

    </body>
</html>