@extends('layouts.app')

@section('content')

@vite('resources/sass/guest/anime/show.scss')

<div class="container">
    <article class="d-flex align-items-stretch">
        <div class="img-container me-3">
            <img src="{{asset($anime->cover_image ? $anime->cover_image : 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/300px-No_image_available.svg.png')}}" alt=" {{$anime->title}}">
        </div>
        <div class="text-container">
            <h5>Title: {{$anime->title}}</h5>
            <h5>Original title: {{$anime->original_title ? $anime->original_title : 'Not available'}}</h5>
            @foreach ($anime->authors as $author)
            <h5>Original concept: {{$author->name}} {{$author->lastname}} <a class="fs-6 ps-3 text-decoration-none" href="{{route('guest.author.show', $author)}}">More info</a></h5>
            @endforeach

            <h5>Audience: {{$anime->audience->name}}</h5>
            <h5>Release year: {{$anime->release_year}}</h5>

            <div class="d-flex">

                <h5>Studios:</h5>
                @foreach ($anime->studios->unique('name') as $studio)
                <h5 class="px-1">{{$studio->name}}</h5>
                @endforeach
            </div>

            <h5>Description: {{$anime->description}}</h5>
        </div>
    </article>
</div>

@endsection
