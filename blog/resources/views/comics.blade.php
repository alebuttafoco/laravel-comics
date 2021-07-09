@extends('layout.app')
@section('title', 'Comics Page')
{{-- CONTENT --}}
@section('content')

<div class="comics">
    {{-- cards --}}
    <div class="cards">
        <div class="container">
            
            {{-- card --}}
            @foreach ($comics as $comic)
            <div class="card">
                <img src=" {{$comic['thumb']}} " alt="">
                <div class="card__text">{{($comic['series'])}}</div>
            </div>
            @endforeach
        
        </div>
    </div>
    {{-- /cards --}}

    {{-- btn --}}
    <div class="row">
        <div class="btn btn--load_more">load more</div>
    </div>
</div>
    

@endsection
