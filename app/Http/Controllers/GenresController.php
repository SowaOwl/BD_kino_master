<?php

namespace App\Http\Controllers;

use App\Models\Genres;
use Illuminate\Http\Request;

class GenresController extends Controller
{
    public function add_genre(Request $request){
        $new_genre = new Genres();
        $new_genre->name = $request->name;
        $new_genre->save();
    }
    public function delete_genre_by_id(Request $request){
        Genres::destroy($request->id);
    }
    public function update_genre_by_id(Request $request){
        Genres::where('id', $request->id)->update(['name'=>$request->name]);
    }
    public function get_genres(Request $request){
        return Genres::all();
    }
    public function get_genre_by_id(Request $request){
        return Genres::where('id', $request->id)->first();
    }
    public function get_genre_by_name(Request $request){
        return Genres::where('id', $request->name)->first();
    }
}
