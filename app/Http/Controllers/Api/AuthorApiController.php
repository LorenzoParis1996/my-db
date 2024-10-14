<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAuthorRequest;
use App\Http\Requests\UpdateAuthorRequest;
use App\Models\Author;
use Illuminate\Http\Request;

class AuthorApiController extends Controller
{
    public function index()
    {
        $authors = Author::all();

        return response()->json([
            'success' => true,
            'results' => $authors
        ]);
    }

    public function show(string $id)
    {
        $author = Author::findOrFail($id);

        return response()->json([
            'success' => true,
            'results' => $author
        ]);
    }

    public function store(StoreAuthorRequest $request)
    {
        $data = $request->validated();

        $newAuthor = Author::create($data);

        return response()->json([
            'success' => true,
            'results' => $newAuthor
        ]);
    }

    public function update(UpdateAuthorRequest $request, Author $author)
    {
        $data = $request->validated();

        $author->update($data);

        return response()->json([
            'success' => true,
            'results' => $author
        ]);
    }
}
