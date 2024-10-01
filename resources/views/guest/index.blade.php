@extends('layouts.app')

@section('content')

<div class="container">

    @foreach ($animes as $anime)

    <div class="card" style="width: 18rem;">
        <img src="{{ asset($anime->cover_image) }}" class="card-img-top" alt="{{$anime->title}}">
        <div class="card-body">
          <h5 class="card-title">{{$anime->title}}</h5>
          <h5 class="card-title">{{$anime->original_title}}</h5>
          <h5 class="card-title">{{$anime->release_year}}</h5>


          <span>{{($anime->audience->name)}}</span>


          @foreach ($anime->studios as $studio)
          <h5 class="card-title">{{$studio->name}}</h5>
          @endforeach

          <p class="card-text">{{$anime->description}}</p>
        </div>
    </div>

    @endforeach

</div>

@endsection
