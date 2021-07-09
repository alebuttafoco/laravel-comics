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
                <h2> {{$comic['title']}} </h2>

                {{-- info price and available --}}
                <div class="available row-between">
                    <div class="row-between">
                        <span> U.S. Price: <span class="price"> {{$comic['price']}} </span> </span>
                        <span>AVAILABLE</span>
                    </div>
                    <div class="check_availability">check availability</div>
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
    <div class="row-between">
        {{-- talent --}}
        <div class="talent">
            <h2></h2>
        </div>

        {{-- specs --}}
        <div class="specs">
            <h2></h2>
        </div>
    </div>
</div>


    

@endsection