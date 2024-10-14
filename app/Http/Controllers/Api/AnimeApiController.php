<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAnimeRequest;
use Illuminate\Http\Request;
use App\Models\Anime;

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

        return response()->json([
            'success' => true,
            'results' =>$newAnime
        ]);
    }
}