<?php

namespace App\Http\Controllers;

use App\Models\Genres_Medias;
use Illuminate\Http\Request;

class GenresMediasController extends Controller
{
    public function add_genre_media(Request $request){
        $new_genre_media = new Genres_Medias();
        $new_genre_media->media_id = $request->media_id;
        $new_genre_media->genre_id = $request->genre_id;
        $new_genre_media->save();
    }
    public function delete_genre_media_by_id(Request $request){
        Genres_Medias::destroy($request->id);
    }
    public function update_genre_media_by_id(Request $request){
        Genres_Medias::where('id', $request->id)->update(['media_id'=>$request->media_id, 'genre_id'=>$request->genre_id]);
    }
    public function get_genres_medias(Request $request){
        return Genres_Medias::all();
    }
    public function get_genre_media_by_id(Request $request){
        return Genres_Medias::where('id', $request->id)->first();
    }
}
