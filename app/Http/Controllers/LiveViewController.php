<?php

namespace App\Http\Controllers;

use App\Models\Repair;
use Illuminate\Http\Request;

class LiveViewController extends Controller
{
    public function index(){
        return view('liveview.index');
    }

    public function getData(){
        $data = array();

        for ($i = 1; $i <= 3; $i++) {
            $data[$i]['total'] = Repair::whereUserId($i)->whereNotIn('closing_reason_id', [2,11,12])->count();
            $data[$i]['new'] = Repair::whereUserId($i)->whereNull('closing_reason_id')->count();
            $data[$i]['rep'] = Repair::whereUserId($i)->whereIn('closing_reason_id', [5,6])->count();
            $data[$i]['wfi'] = Repair::whereUserId($i)->whereIn('closing_reason_id', [8])->count();
            $data[$i]['order'] = Repair::whereUserId($i)->whereIn('closing_reason_id', [4])->count();
            $data[$i]['mailin'] = Repair::whereUserId($i)->whereIn('closing_reason_id', [9])->count();
            $data[$i]['kva'] = Repair::whereUserId($i)->whereIn('closing_reason_id', [7])->count();


            $data[$i]['total'] = $data[$i]['total'] + $data[$i]['new'];
        }

        $data['servertime'] = now();

        return response()->json($data);
    }
}
