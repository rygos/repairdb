<?php

namespace App\Http\Controllers;

use App\Models\Overtime;
use Illuminate\Http\Request;

class OvertimeController extends Controller
{
    public function index(){
        $data = Overtime::whereUserId(\Auth::id())->orderBy('created_at', 'asc')->get();
        $ot_minutes = Overtime::whereUserId(\Auth::id())->sum('overtime_minutes');
        $overtime_sum = $ot_minutes * 0.0166666666667;

        return view('overtime.index', [
            'data' => $data,
            'ot_sum' => $overtime_sum,
        ]);
    }

    public function store(Request $request){


        return redirect()->action('OvertimeController@index');
    }
}
