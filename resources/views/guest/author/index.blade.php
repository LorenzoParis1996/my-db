@extends('layouts.app')

@section('content')

@vite('resources/sass/guest/anime/index.scss')

<div class="container">
    <article class="d-flex flex-wrap justify-content-center">
        @foreach ($authors as $author)
          <div class="card mx-2 mb-3" style="width: 18rem;">

              <div class="img-container">
                  <img src="{{asset($author->author_pic)}}" alt="{{$author->lastname}}" class="card-img-top">
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
