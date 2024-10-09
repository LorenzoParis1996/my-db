<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Author;

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
}