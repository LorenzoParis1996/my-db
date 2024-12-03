@extends('layouts.app')

@section('content')

@vite('resources/sass/guest/anime/index.scss')

<div class="container">


    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
          <form action="{{route('guest.products.index')}}" method="GET" class="d-flex" role="search">
            <input class="form-control me-2" id="term" value="{{request('term')}}" name="term" type="search" placeholder="Search product" aria-label="Search product">
            <button class="btn btn-outline-success" type="submit">Search</button>
            <a href="{{route('guest.products.index')}}" class="btn btn-danger ms-2" type="reset">Reset</a>
          </form>
          <div class="d-flex">
            <div class="pe-4">
              Quantity order: <span id="quantity-order">0</span>
            </div>
            <div>
              <a href="" class="btn btn-primary btn-sm disabled">Order</a>
            </div>
          </div>
          <span id="add-message" class="text-primary" style="display: none"></span>
        </div>
    </nav>

    <article class="d-flex flex-wrap justify-content-center">

        @foreach ($products as $product)

        <div class="card mx-2 mb-3" style="width: 18rem;" data-product-id="{{$product->id}}">
            <div class="img-container">
                <img src="{{asset($product->image ? $product->image : 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/300px-No_image_available.svg.png')}}" class="card-img-top" alt="{{$product->name}}">

            </div>
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">Title: {{$product->name}}</h5>
              <h6 class="card-title">Season: {{$product->season}}</h6>
              <h6 class="card-title">Format: {{$product->format}}</h6>
              <h6 class="card-title">Price: {{$product->price}}$</h6>
              <h6 class="card-title">Stock: <span class="stock-quantity" data-stock="{{$product->stock}}">{{$product->stock}}</span></h6>
              <div class="d-flex justify-content-center mt-auto">
                  <button class="btn btn-primary btn-sm add">Add to cart</button>
              </div>
              <div class="d-flex justify-content-center mt-auto">
                <button class="btn btn-danger btn-sm remove">Remove from cart</button>
            </div>
            </div>
        </div>


        @endforeach
    </article>
    @vite('resources/js/my-scripts/cart.js')


</div>

@endsection


