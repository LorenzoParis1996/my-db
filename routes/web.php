<?php

use App\Http\Controllers\Guest\AnimeController;
use App\Http\Controllers\Guest\AuthorController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/guest/anime', [AnimeController::class, 'index'])->name('guest.anime.index');
Route::get('/guest/anime/{anime}', [AnimeController::class, 'show'])->name('guest.anime.show');

Route::get('/guest/author', [AuthorController::class, 'index'])->name('guest.author.index');
Route::get('/guest/author/{author}', [AuthorController::class, 'show'])->name('guest.author.show');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->name('admin.')->prefix('admin/')->group(
    function() {
        Route::get('home', [AdminHomeController::class, 'index'])->name('home')->middleware('auth');
    }
);