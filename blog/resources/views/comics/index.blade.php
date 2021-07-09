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
</section>
    

@endsection