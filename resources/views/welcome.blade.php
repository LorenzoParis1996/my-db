<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DB Anime</title>



    </head>
    <body>
        <h1>layout in progress</h1>
        <hr>
        <div>
            @if (Route::has('login'))
                <div class="text-decoration-none">
                    @auth
                        <a href="{{ url('/home') }}" class="text-decoration-none">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-decoration-none">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="text-decoration-none">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

         <h2>Welcome to DB Anime. Here you can <a href="{{route('guest.anime.index')}}">see</a> some of my favourites anime, and if you want, you can create an account and add some to the list.</h2>
    </body>
</html>
