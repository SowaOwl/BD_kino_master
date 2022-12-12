<?php

namespace App\Http\Controllers;

use App\Models\Actors;
use App\Models\Medias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ActorController extends Controller
{
    public function add_actor(Request $request){
        $new_actor = new Actors();
        $new_actor->name = $request->name;
        $new_actor->save();
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
    public function test(){
        $media = Medias::first();
        foreach ($media->genres as $genre){
            return $genre;
        }

//        $actor = Actors::first();
//        foreach ($actor->genres as $genre){
//            return $genre;
//        }
    }
}
