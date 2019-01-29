<?php

namespace App\Http\Controllers;

use App\Models\Repair;
use App\Models\Rminstzlb;
use App\Models\Unit;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function searchProcess(Request $request){
        $term = $request->post('term');
        return redirect()->action('SearchController@search', $term);
    }

    public function search($term){
        $res_rminst = Rminstzlb::where('rminst', 'LIKE', "%$term%")->get();
        $res_zlb = Rminstzlb::where('zlb', 'LIKE', "%$term%")->get();

        $res_unit = Unit::where('serial', 'LIKE', "%$term%")->get();

        $res_rminst_ids = array();

        foreach($res_rminst as $i){
            $res_rminst_ids[] = $i->id;
        }
        foreach($res_zlb as $i){
            $res_rminst_ids[] = $i->id;
        }

        $res_unit_ids = array();
        foreach ($res_unit as $i){
            $res_unit_ids[] = $i->id;
        }

        $result = new \Illuminate\Database\Eloquent\Collection;

        $reprminst = Repair::whereIn('rminstzlb_id', $res_rminst_ids)->get();
        $repunits = Repair::whereIn('unit_id', $res_unit_ids)->get();

        $result = $reprminst->merge($repunits);

        $reporder = Repair::where('order_no', 'LIKE', "%$term%")->get();
        $result = $result->merge($reporder);

        $repgno = Repair::where('g_no', 'LIKE', "%$term%")->get();
        $result = $result->merge($repgno)->sortByDesc('id', 'ASC');

        return view('home.index', [
            'data' => $result,
            'term' => $term,
        ]);
    }
}
