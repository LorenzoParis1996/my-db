@extends('layouts.app')

@section('content')

@vite('resources/sass/guest/anime/show.scss')

<div class="container">
    <article class="d-flex align-items-stretch">
        <div class="img-container me-3">
            <img src="{{asset($author->author_pic)}}" alt="{{$author->lastname}}">
        </div>
        <div class="text-container">
            <h5>Last Name: {{$author->lastname}}</h5>
            <h5>Name: {{$author->name}}</h5>
            <h5>Nationality: {{$author->nationality}}</h5>
            <h5>Date of birth: {{$author->date_of_birth}}</h5>
            <h5>Place of birth: {{$author->place_of_birth}}</h5>
            <h5>Biography: {{$author->brief_biography}}</h5>
        </div>
    </article>
</div>
@endsection
