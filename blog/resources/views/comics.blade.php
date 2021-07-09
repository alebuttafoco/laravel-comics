@extends('layout.app')
@section('title', 'Comics Page')
{{-- CONTENT --}}
@section('content')

<div class="comics">
    <div class="cards">
        <div class="container">
        
            @foreach ($comics as $comic)
            <div class="card">
                <img src=" {{$comic['thumb']}} " alt="">
                <div class="card__text">{{($comic['series'])}}</div>
            </div>
            @endforeach
        
        </div>
    </div>
</div>
    

@endsection
