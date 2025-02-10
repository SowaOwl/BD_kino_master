<?php

namespace App\Http\Controllers;

use App\Models\Actors;
use App\Models\actors_genres;
use App\Models\Genres;
use App\Models\Genres_Actors;
use App\Models\Medias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ActorController extends Controller
{
    public function add_actor(Request $request){
        $new_actor = new Actors();
        $new_actor->name = $request->name;
        $new_actor->save();

        $genres = explode(",", $request->genres);

        foreach ($genres as $genre){
            $find_genre = Genres::where('name', $genre)->first();
            $new_genre_actor = new actors_genres();
            $new_genre_actor->actors_id = $new_actor->id;
            $new_genre_actor->genres_id = $find_genre->id;
            $new_genre_actor->save();
        }
    }
    public function delete_actor_by_id(Request $request){
        Actors::destroy($request->id);
    }
    public function update_actor_by_id(Request $request){
        Actors::where('id',$request->id)->update(['name'=>$request->name]);
    }
    public function get_actors(){
        return Actors::all();
    }
    public function get_actor_by_id(Request $request){
        return Actors::where('id', $request->id)->first();
    }
    public function get_genres_actor(Request $request){
        return Actors::where('id', $request->id)->first()->genres;
    }
}
