<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActorController;
use App\Http\Controllers\ActorsMediasController;
use App\Http\Controllers\GenresController;
use App\Http\Controllers\GenresActorsController;
use App\Http\Controllers\GenresMediasController;
use App\Http\Controllers\MediasController;
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

Route::get('/add', [MediasController::class, 'add_media']);

Route::get('/delete', [MediasController::class, 'delete_media']);

Route::get('/update', [MediasController::class, 'update_media_by_id']);

Route::get('/all', [MediasController::class, 'get_medias']);

Route::get('/byid', [MediasController::class, 'get_media_by_id']);
