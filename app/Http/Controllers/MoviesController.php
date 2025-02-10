<?php

namespace App\Http\Controllers;

use App\Models\Movies;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function add_movie (Request $request){
        $new_movie = new Movies();
        $new_movie->mini_desc = $request->mini_desc;
        $new_movie->save();
    }
    public function delete_movie_by_id (Request $request){
        Movies::destroy($request->id);
    }
    public function update_movie_by_id (Request $request){
        Movies::where('id', $request->id)->update(['mini_desc'=>$request->mini_desc]);
    }
    public function get_movies (Request $request){
        return Movies::all();
    }
    public function get_movie_by_id (Request $request){
        return Movies::where('id', $request->id)->first();
    }
}
