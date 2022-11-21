<?php

namespace App\Http\Controllers;

use App\Models\Genres_Actors;
use Illuminate\Http\Request;

class GenresActorsController extends Controller
{
    public function genre_actor_add(Request $request){
        $new_genre_actor = new Genres_Actors();
        $new_genre_actor->genre_id = $request->genre_id;
        $new_genre_actor->actor_id = $request->actor_id;
        $new_genre_actor->save();
    }
    public function delete_genre_actor(Request $request){
        Genres_Actors::destroy($request->id);
    }
    public function update_genre_actor_by_id(Request $request){
        Genres_Actors::where('id', $request->id)->update(['genre_id'=>$request->genre_id, 'actor_id'=>$request->actor_id]);
    }
    public function get_genres_actors(Request $request){
        return Genres_Actors::all();
    }
    public function get_genre_actor_by_id(Request $request){
        return response()->json(Genres_Actors::where('id', $request->id)->first());
    }
}
