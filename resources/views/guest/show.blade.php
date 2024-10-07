@extends('layouts.app')

@section('content')

@vite('resources/sass/guest/show.scss')

<div class="container">
    <article class="d-flex align-items-stretch">
        <div class="img-container me-3">
            <img src="{{ asset($anime->cover_image) }}" alt=" {{$anime->title}}">
        </div>
        <div class="text-container">
            <h5>Title: {{$anime->title}}</h5>
            <h5>Original title: {{$anime->original_title}}</h5>
            @foreach ($anime->authors as $author)
            <h5>Original concept: {{$author->name}} {{$author->lastname}}</h5>
            @endforeach

            <h5>Audience: {{$anime->audience->name}}</h5>
            <h5>Release year: {{$anime->release_year}}</h5>

            @foreach ($anime->studios as $studio)
            <h5>Studio: {{$studio->name}}</h5>
            @endforeach

            <h5>Description: {{$anime->description}}</h5>
        </div>
    </article>
</div>

@endsection
