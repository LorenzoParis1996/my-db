<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AnimeApiController;
use App\Http\Controllers\Api\AuthorApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::get('/animes', [AnimeApiController::class, 'index'])->name('api.animes.index');
Route::get('/animes/{anime}', [AnimeApiController::class, 'show'])->name('api.animes.show');

Route::get('/authors', [AuthorApiController::class, 'index'])->name('api.authors.index');
Route::get('/authors/{author}', [AuthorApiController::class, 'show'])->name('api.author.show');

Route::post('/authors', [AuthorApiController::class, 'store'])->name('api.authors.store');

Route::put('/authors/{author}', [AuthorApiController::class, 'update'])->name('api.authors.update');
