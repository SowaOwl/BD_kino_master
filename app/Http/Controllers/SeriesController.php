<?php

namespace App\Http\Controllers;

use App\Models\Series;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function add_series(Request $request){
        $new_series = new Series();
        $new_series->serial_num = $request->serial_num;
        $new_series->season_num = $request->season_num;
        $new_series->season_desc = $request->season_desc;
        $new_series->serial_desc = $request->serial_desc;
        $new_series->mini_desc = $request->mini_desc;
        $new_series->save();
    }
    public function delete_series_by_id(Request $request){
        Series::destroy($request->id);
    }
    public function update_series_by_id(Request $request){
        Series::where('id', $request->id)->update(['serial_num'=>$request->serial_num,
            'season_num'=>$request->season_num,
            'season_desc'=>$request->season_desc,
            'serial_desc'=>$request->serial_desc,
            'mini_desc'=>$request->mini_desc]);
    }
    public function get_series(Request $request){
        return Series::all();
    }
    public function get_series_by_id(Request $request){
        return Series::where('id', $request->id)->first();
    }
}
