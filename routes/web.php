<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActorController;
use App\Http\Controllers\ActorsMediasController;
use App\Http\Controllers\GenresController;
use App\Http\Controllers\GenresActorsController;
use App\Http\Controllers\GenresMediasController;
use App\Http\Controllers\MediasController;
use App\Http\Controllers\SeriesController;
use App\Http\Controllers\MoviesController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/add', [MoviesController::class, 'add_movie']);

Route::get('/delete', [MoviesController::class, 'delete_movie_by_id']);

Route::get('/update', [MoviesController::class, 'update_movie_by_id']);

Route::get('/all', [MoviesController::class, 'get_movies']);

Route::get('/byid', [MoviesController::class, 'get_movie_by_id']);

Route::get('/test', [ActorController::class, 'test']);
