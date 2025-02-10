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

Route::get('/actor/add', [ActorController::class, 'add_actor']);
Route::get('/actor/delete', [ActorController::class, 'delete_actor_by_id']);
Route::get('/actor/update', [ActorController::class, 'update_actor_by_id']);
Route::get('/actors/all', [ActorController::class, 'get_actors']);
Route::get('/actor/id', [ActorController::class, 'get_actor_by_id']);
Route::get('/actor/genres', [ActorController::class, 'get_genres_actor']);

Route::get('/actor_media/add', [ActorsMediasController::class, 'add_actor_media']);
Route::get('/actor_media/delete', [ActorsMediasController::class, 'delete_actor_media_by_id']);
Route::get('/actor_media/update', [ActorsMediasController::class, 'update_actor_media_by_id']);
Route::get('/actors_medias/all', [ActorsMediasController::class, 'get_actors_medias']);
Route::get('/actor_media/id', [ActorsMediasController::class, 'get_actor_media_by_id']);

Route::get('/genre/add', [GenresController::class, 'add_genre']);
Route::get('/genre/delete', [GenresController::class, 'delete_genre_by_id']);
Route::get('/genre/update', [GenresController::class, 'update_genre_by_id']);
Route::get('/genres/all', [GenresController::class, 'get_genres']);
Route::get('/genre/id', [GenresController::class, 'get_genre_by_id']);
Route::get('/genre/name', [GenresController::class, 'get_genre_by_name']);

Route::get('/genre_actor/add', [GenresActorsController::class, 'genre_actor_add']);
Route::get('/genre_actor/delete', [GenresActorsController::class, 'delete_genre_actor_by_id']);
Route::get('/genre_actor/update', [GenresActorsController::class, 'update']);
Route::get('/genres_actors/all', [GenresActorsController::class, 'get_genres_actors']);
Route::get('/genre_actor/id', [GenresActorsController::class, 'get_genre_actor_by_id']);

Route::get('/genre_media/add', [GenresMediasController::class, 'add_genre_media']);
Route::get('/genre_media/delete', [GenresMediasController::class, 'delete_genre_media_by_id']);
Route::get('/genre_media/update', [GenresMediasController::class, 'update_genre_media_by_id']);
Route::get('/genres_medias/all', [GenresMediasController::class, 'get_genres_medias']);
Route::get('/genre_media/id', [GenresMediasController::class, 'get_genre_media_by_id']);

Route::get('/media/add', [MediasController::class, 'add_media']);
Route::get('/media/delete', [MediasController::class, 'delete_media_by_id']);
Route::get('/media/update', [MediasController::class, 'update_media_by_id']);
Route::get('/medias/all', [MediasController::class, 'get_medias']);
Route::get('/media/id', [MediasController::class, 'get_media_by_id']);
Route::get('/medias/name', [MediasController::class, 'get_medias_by_name']);
Route::get('/medias/genre', [MediasController::class, 'get_medias_by_genre']);

Route::get('/series/add', [SeriesController::class, 'add_series']);
Route::get('/series/delete', [SeriesController::class, 'delete_series_by_id']);
Route::get('/series/update', [SeriesController::class, 'update_series_by_id']);
Route::get('/series/all', [SeriesController::class, 'get_series']);
Route::get('/series/id', [SeriesController::class, 'get_series_by_id']);

Route::get('/movie/add', [MoviesController::class, 'add_movie']);
Route::get('/movie/delete', [MoviesController::class, 'delete_movie_by_id']);
Route::get('/movie/update', [MoviesController::class, 'update_movie_by_id']);
Route::get('/movie/all', [MoviesController::class, 'get_movies']);
Route::get('/movie/id', [MoviesController::class, 'get_movie_by_id']);
