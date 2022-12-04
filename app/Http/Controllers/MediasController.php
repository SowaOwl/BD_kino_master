<?php

namespace App\Http\Controllers;

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
}
