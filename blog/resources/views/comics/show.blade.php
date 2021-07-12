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
                <img src=" {{asset('img/adv.jpg')}}" alt="">
            </div>
        </div>

    </div>

    {{-- talent and specs --}}
    <div class="info_bottom">

        <div class="container-sm row-between">
            {{-- talent --}}
            <div class="info">
                <h2 class="info__title bb">Talent</h2>

                {{-- art by --}}
                <div class="row-between bb">
                    <div class="group">Art by:</div>
                    <div class="group_text">
                        @foreach ($comic['artists'] as $artist)
                            <a href="#"> {{$artist}} </a> 
                            @if (!$loop->last)
                                ,
                            @endif
                        @endforeach
                    </div>
                </div>

                {{-- written by --}}
                <div class="row-between bb">
                    <div class="group">Written by:</div>
                    <div class="group_text">
                        @foreach ($comic['writers'] as $writer)
                            <a href="#"> {{$writer}} </a>
                            @if (!$loop->last)
                                ,
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
    
            {{-- specs --}}
            <div class="info">
                <h2 class="info__title bb">Specs</h2>
                
                {{-- serie --}}
                <div class="row-between bb">
                    <div class="group">Series:</div>
                    <div class="group_text">
                        <a href="#" > {{$comic['series']}}</a>
                    </div>
                </div>
            
            
                {{-- US price --}}
                <div class="row-between bb">
                    <div class="group">U.S Price:</div>
                    <div class="group_text">
                        <span>{{$comic['price']}}</span>
                    </div>
                </div>
            
                {{-- sale date --}}
                <div class="row-between bb">
                    <div class="group">On Sale Date:</div>
                    <div class="group_text">
                        <span>{{$comic['sale_date']}}</span>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    {{-- bottom features --}}
    <div class="features bt">
        <div class="container-sm">

            {{-- digital comics --}}
            <div class="row bl">
                <span>digital comics</span>
                <img src="" alt="image">
            </div>

            {{-- shop dc --}}
            <div class="row bl">
                <span>shop dc</span>
                <img src="" alt="image">
            </div>

            {{-- comic shop locator --}}
            <div class="row bl">
                <span>comic shop locator</span>
                <img src="" alt="image">
            </div>

            {{-- subscriptions --}}
            <div class="row bl br">
                <span>subscriptions</span>
                <img src="" alt="image">
            </div>

        </div>
    </div>
</div>


    

@endsection