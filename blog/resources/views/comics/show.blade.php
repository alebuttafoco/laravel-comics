@extends('layout.app')

{{-- content --}}
@section('content')
    
<div class="book">

    {{-- active book cover --}}
    <div class="book__cover">
        <div class="container-sm">
            <img src=" {{$comic['thumb']}} " alt="">
        </div>
    </div>

    {{-- active book detail --}}
    <div class="book__main_details">

        <div class="row-between container-sm">
            {{-- book details --}}
            <div class="book__main_details--text">
                {{-- title --}}
                <h2 class="heading"> {{$comic['title']}} </h2>

                {{-- info price and available --}}
                <div class="available">
                    <div class="row-between">
                        <span> U.S. Price: <span class="price"> {{$comic['price']}} </span> </span>
                        <span>AVAILABLE</span>
                        <span class="check_availability">Check Availability</span>
                    </div>
                </div>

                {{-- description --}}
                <div class="description">
                    <p> {{$comic['description']}} </p>
                </div>

            </div>

            {{-- advertisement --}}
            <div class="advertisement">
                <img src="./img/adv.jpg" alt="">IMMAGINE
            </div>
        </div>

    </div>

    {{-- talent and specs --}}
    <div class="">

        <div class="container-sm row-between">
            {{-- talent --}}
            <div class="info">
                <h2 class="info__title">Talent</h2>
            </div>
    
            {{-- specs --}}
            <div class="info">
                <h2 class="info__title">Specs</h2>
            </div>
        </div>

    </div>
</div>


    

@endsection