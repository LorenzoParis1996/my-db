@extends('layouts.app')

@section('content')

@vite('resources/sass/guest/anime/index.scss')

<div class="container">

    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
          <form action="{{route('guest.anime.index')}}" method="GET" class="d-flex" role="search">
            <input class="form-control me-2" id="term" value="{{request('term')}}" name="term" type="search" placeholder="Search anime" aria-label="Search anime">
            <button class="btn btn-outline-success" type="submit">Search</button>
            <a href="{{route('guest.anime.index')}}" class="btn btn-danger ms-2" type="reset">Reset</a>
          </form>
        </div>
    </nav>

    <article class="d-flex flex-wrap justify-content-center">

        @foreach ($animes as $anime)

        <div class="card mx-2 mb-3" style="width: 18rem;">
            <div class="img-container">
                <img src="{{asset($anime->cover_image ? $anime->cover_image : 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/300px-No_image_available.svg.png')}}" class="card-img-top" alt="{{$anime->title}}">

            </div>
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">Title: {{$anime->title}}</h5>
              <h6 class="card-title">Release year: {{$anime->release_year}}</h6>
              <h6 class="card-title">Audience: {{($anime->audience->name)}}</h6>
              <div class="d-flex justify-content-center mt-auto">
                <a class="btn btn-primary btn-sm" href="{{route('guest.anime.show', $anime)}}">Show details</a>
              </div>


            </div>
        </div>

        @endforeach
    </article>

</div>

@endsection
