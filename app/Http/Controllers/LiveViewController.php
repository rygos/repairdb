<?php

namespace App\Http\Controllers;

use App\Models\Repair;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LiveViewController extends Controller
{
    public function index(){
        return view('liveview.index');
    }

    public function getData(){
        $data = array();

        for ($i = 1; $i <= 3; $i++) {
            $data['user'][$i]['total'] = Repair::whereUserId($i)->whereNotIn('closing_reason_id', [2,11,12])->count();
            $data['user'][$i]['new'] = Repair::whereUserId($i)->whereNull('closing_reason_id')->count();
            $data['user'][$i]['rep'] = Repair::whereUserId($i)->whereIn('closing_reason_id', [5,6])->count();
            $data['user'][$i]['wfi'] = Repair::whereUserId($i)->whereIn('closing_reason_id', [8])->count();
            $data['user'][$i]['order'] = Repair::whereUserId($i)->whereIn('closing_reason_id', [4])->count();
            $data['user'][$i]['mailin'] = Repair::whereUserId($i)->whereIn('closing_reason_id', [9])->count();
            $data['user'][$i]['kva'] = Repair::whereUserId($i)->whereIn('closing_reason_id', [7])->count();


            $data['user'][$i]['total'] = $data[$i]['total'] + $data[$i]['new'];
        }

        $data['servertime'] = now();

        return response()->json($data);
    }
}
