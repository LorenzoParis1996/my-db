@extends('layouts.app')

@section('content')

@vite('resources/sass/guest/index.scss')

<div class="container">

    <article class="d-flex flex-wrap justify-content-center">

        @foreach ($animes as $anime)

        <div class="card mx-2 mb-3" style="width: 18rem;">
            <div class="img-container">
                <img src="{{ asset($anime->cover_image) }}" class="card-img-top" alt="{{$anime->title}}">

            </div>
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">Title: {{$anime->title}}</h5>
              <h6 class="card-title">Release year: {{$anime->release_year}}</h6>
              <h6 class="card-title">Audience: {{($anime->audience->name)}}</h6>
              <div class="d-flex justify-content-center mt-auto">
                <a class="btn btn-primary btn-sm" href="{{route('guest.show', $anime)}}">Show details</a>
              </div>


            </div>
        </div>

        @endforeach
    </article>

</div>

@endsection
