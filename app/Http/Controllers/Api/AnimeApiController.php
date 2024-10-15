<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAnimeRequest;
use Illuminate\Http\Request;
use App\Models\Anime;
//use Illuminate\Support\Facades\Log;

class AnimeApiController extends Controller
{
    public function index()
    {
        $animes = Anime::with('studios', 'audience', 'authors')->get();

        return response()->json([
            'success' => true,
            'results' => $animes
        ]);
    }

    public function show(string $id)
    {
        $anime = Anime::with('studios', 'audience', 'authors')->findOrFail($id);

        return response()->json([
            'success' => true,
            'results' => $anime
        ]);
    }

    public function store(StoreAnimeRequest $request)
    {
        $data = $request->validated();

        $newAnime = Anime::create($data);

        if (isset($data['studios'])) { //verifico che la variabile sia definita e non null
            //array_column e' una funzione che mi permette di estrarre dati specifici da un array multidimensionale da una column specifica. Col primo parametro accedo all'array ($data['studios']), col secondo parametro prendo il valore che mi interressa ('studios_id').
            $studioIds = array_column($data['studios'], 'studio_id');
            //Log::info('Attaching studios: ', $studioIds);
            $newAnime->studios()->attach($studioIds);
        }

        if (isset($data['authors'])) {
            $authorIds = array_column($data['authors'], 'author_id');
            //Log::info('Attaching authors: ', $authorIds);
            $newAnime->authors()->attach($authorIds);
        }

        return response()->json([
            'success' => true,
            'results' => Anime::with('studios', 'audience', 'authors')->find($newAnime->id)
        ]);
    }
}