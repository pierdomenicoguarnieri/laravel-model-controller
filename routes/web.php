<?php

use App\Http\Controllers\Guest\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PageController::class, 'index'])->name('home');

Route::get('/lista-film', [PageController::class, 'movies'])->name('movies');

Route::get('/contatti', [PageController::class, 'contacts'])->name('contacts');

Route::get('/film/{id}', [PageController::class, 'movie_info'])->name('movie_info');

