<?php

use App\Http\Controllers\Guest\GuestController;
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

Route::get('/guest', [GuestController::class, 'index'])->name('guest.index');
Route::get('/guest/{anime}', [GuestController::class, 'show'])->name('guest.show');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->name('admin.')->prefix('admin/')->group(
    function() {
        Route::get('home', [AdminHomeController::class, 'index'])->name('home')->middleware('auth');
    }
);