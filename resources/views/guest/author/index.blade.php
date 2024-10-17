@extends('layouts.app')

@section('content')

@vite('resources/sass/guest/anime/index.scss')

<div class="container">

    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
          <form action="{{route('guest.author.index')}}" method="GET" class="d-flex" role="search">
            <input class="form-control me-2" id="term" value="{{request('term')}}" name="term" type="search" placeholder="Search author" aria-label="Search author">
            <button class="btn btn-outline-success" type="submit">Search</button>
            <a href="{{route('guest.author.index')}}" class="btn btn-danger ms-2" type="reset">Reset</a>
          </form>
        </div>
    </nav>

    <article class="d-flex flex-wrap justify-content-center">
        @foreach ($authors as $author)
          <div class="card mx-2 mb-3" style="width: 18rem;">

              <div class="img-container">
                  <img src="{{asset($author->author_pic ? $author->author_pic : 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/300px-No_image_available.svg.png')}}" alt="{{$author->lastname}}" class="card-img-top">
              </div>
              <div class="card-body d-flex flex-column">
                  <h5>Last name: {{$author->lastname}}</h5>
                  <h5>Name: {{$author->name}}</h5>
                  <div class="d-flex justify-content-center mt-auto">
                      <a class="btn btn-primary btn-sm" href="{{route('guest.author.show', $author)}}">Show details</a>
                  </div>
              </div>
          </div>
        @endforeach
    </article>
</div>

@endsection
