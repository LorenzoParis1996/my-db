@extends('layouts.app')

@section('content')

@vite('resources/sass/guest/anime/show.scss')

<div class="container">
    <article class="d-flex align-items-stretch">
        <div class="img-container me-3">
            <img src="{{asset($author->author_pic ? $author->author_pic : 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/300px-No_image_available.svg.png')}}" alt="{{$author->lastname}}">
        </div>
        <div class="text-container">
            <h5>Last Name: {{$author->lastname}}</h5>
            <h5>Name: {{$author->name}}</h5>
            <h5>Nationality: {{$author->nationality ? $author->nationality : 'Not available'}}</h5>
            <h5>Date of birth: {{$author->date_of_birth ? $author->date_of_birth : 'Not available'}}</h5>
            <h5>Place of birth: {{$author->place_of_birth ? $author->place_of_birth : 'Not available'}}</h5>
            <h5>Biography: {{$author->brief_biography}}</h5>
        </div>
    </article>
</div>
@endsection
