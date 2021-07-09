@extends('layout.app')
@section('title', 'Comics Page')
{{-- CONTENT --}}
@section('content')

<section class="comics">
    {{-- title --}}
    <div class="container">
        <h1 class="section_title"> current series </h1>
    </div>

    {{-- cards --}}
    <div class="cards">
        <div class="container">
            
            {{-- card --}}
            @foreach ($comics as $index => $comic)
            <div class="card">
                <a href=" {{route('comic', ['id' => $index])}} ">
                    <img src=" {{$comic['thumb']}} " alt="">
                </a>
                <div class="card__text">{{($comic['series'])}}</div>
            </div>
            @endforeach
        
        </div>
    </div>
    {{-- /cards --}}

     {{-- btn --}}
     <div class="row-center">
        <div class="btn btn--load_more">load more</div>
    </div>

    {{-- features --}}
    <div class="features ">
        <div class="container row-evenly">

            <div class="feature">
                <img src="./img/buy-comics-digital-comics.png" alt="">
                <span>digital comics</span>
            </div>
            <div class="feature">
                <img src="./img/buy-comics-merchandise.png" alt="">
                <span>dc merchandise</span>
            </div>
            <div class="feature">
                <img src="./img/buy-comics-subscriptions.png" alt="">
                <span>subscription</span>
            </div>
            <div class="feature">
                <img src="./img/buy-comics-shop-locator.png" alt="">
                <span>comic shop locator</span>
            </div>
            <div class="feature">
                <img src="./img/buy-dc-power-visa.svg" alt="">
                <span>dc power visa</span>
            </div>

        </div>
    </div>

</section>
    

@endsection