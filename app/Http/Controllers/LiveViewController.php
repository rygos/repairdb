<?php

namespace App\Http\Controllers;

use App\Models\Repair;
use Illuminate\Http\Request;

class LiveViewController extends Controller
{
    public function index(){

        $data_user = array();

        for ($i = 1; $i <= 3; $i++) {
            $data_user[$i]['total'] = Repair::whereUserId($i)->whereNotIn('closing_reason_id', [2,11,12])->count();
            $data_user[$i]['new'] = Repair::whereUserId($i)->whereNull('closing_reason_id')->count();
            $data_user[$i]['rep'] = Repair::whereUserId($i)->whereIn('closing_reason_id', [5,6])->count();
            $data_user[$i]['wfi'] = Repair::whereUserId($i)->whereIn('closing_reason_id', [8])->count();
            $data_user[$i]['order'] = Repair::whereUserId($i)->whereIn('closing_reason_id', [4])->count();
            $data_user[$i]['mailin'] = Repair::whereUserId($i)->whereIn('closing_reason_id', [9])->count();
            $data_user[$i]['kva'] = Repair::whereUserId($i)->whereIn('closing_reason_id', [7])->count();


            $data_user[$i]['total'] = $data_user[$i]['total'] + $data_user[$i]['new'];
        }

        return view('liveview.index', [
            'du' => $data_user,
        ]);
    }
}
