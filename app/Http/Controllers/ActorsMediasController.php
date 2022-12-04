<?php

namespace App\Http\Controllers;

use App\Models\Actors_Medias;
use Illuminate\Http\Request;

class ActorsMediasController extends Controller
{
    public function add_actor_media(Request $request){
        $new_actor_media = new Actors_Medias();
        $new_actor_media->media_id = $request->media_id;
        $new_actor_media->actor_id = $request->actor_id;
        $new_actor_media->save();
    }
    public function delete_actor_media_by_id(Request $request){
        Actors_Medias::destroy($request->id);
    }
    public function update_actor_media_by_id(Request $request){
        Actors_Medias::where('id',$request->id)->update(['media_id'=>$request->media_id,'actor_id'=>$request->actor_id]);
    }
    public function get_actors_medias(Request $request){
        return Actors_Medias::all();
    }
    public function get_actor_media_by_id(Request $request){
        return Actors_Medias::where('id', $request->id)->first();
    }
}
