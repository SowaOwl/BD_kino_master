<?php

namespace App\Http\Controllers;

use App\Models\Medias;
use Illuminate\Http\Request;

class MediasController extends Controller
{
    public function add_media(Request $request){
        $new_media = new Medias();
        $new_media->title = $request->title;
        $new_media->type = $request->type;
        $new_media->desc = $request->desc;
        $new_media->save();
    }
    public function delete_media(Request $request){
        Medias::destroy($request->id);
    }
    public function update_media_by_id(Request $request){
        Medias::where('id', $request->id)->update(['title'=>$request->title, 'type'=>$request->type, 'desc'=>$request->desc]);
    }
    public function get_medias(Request $request){
        return Medias::all();
    }
    public function get_media_by_id(Request $request){
        return Medias::where('id', $request->id)->first();
    }
}
