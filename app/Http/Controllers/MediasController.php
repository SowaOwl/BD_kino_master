<?php

namespace App\Http\Controllers;

use App\Models\actors_medias;
use App\Models\Genres;
use App\Models\genres_medias;
use App\Models\Medias;
use Illuminate\Http\Request;

class MediasController extends Controller
{
    public function add_media(Request $request){
        $new_media = new Medias();
        $new_media->video_title = $request->video_title;
        $new_media->video_text = $request->video_text;
        $new_media->video_type = $request->video_type;
        $new_media->fr_name = $request->fr_name;
        $new_media->rating = $request->rating;
        $new_media->save();

        $genres = explode(',', $request->genres);
        $actors = explode(',', $request->actors);

        foreach ($genres as $genre){
            $find_genre = Genres::where('name', $genre)->first();
            $new_genres_medias = new genres_medias();
            $new_genres_medias->medias_id = $new_media->id;
            $new_genres_medias->genres_id = $find_genre->id;
            $new_genres_medias->save();
        }

        foreach ($actors as $actor){
            $find_actor = Genres::where('id', $actor)->first();
            $new_actors_medias = new actors_medias();
            $new_actors_medias->medias_id = $new_media->id;
            $new_actors_medias->actors_id = $find_actor->id;
            $new_actors_medias->save();
        }
    }
    public function delete_media_by_id(Request $request){
        Medias::destroy($request->id);
    }
    public function update_media_by_id(Request $request){
        Medias::where('id', $request->id)->update(['video_title'=>$request->video_title,
            'video_text'=>$request->video_text,
            'video_type'=>$request->video_type,
            'fr_name'=>$request->fr_name,
            'rating'=>$request->rating]);
    }
    public function get_medias(Request $request){
        return Medias::all();
    }
    public function get_media_by_id(Request $request){
        return Medias::where('id', $request->id)->first();
    }
    public function get_media_by_name(Request $request){
        return Medias::where('fr_name', $request->name)->first();
    }
    public function get_medias_by_name(Request $request){
        return json_encode(Medias::all()->where('fr_name', $request->name));
    }
    public function get_medias_by_genre(Request $request){
        $find_medias = array();
        $medias = Medias::all();
        foreach ($medias as $media){
            foreach ($media->genres as $genre){
                if($genre->name == $request->genre){
                    array_push($find_medias,$media);
                }
            }
        }
        return $find_medias;
    }
}
