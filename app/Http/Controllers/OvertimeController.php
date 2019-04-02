<?php

namespace App\Http\Controllers;

use App\Mail\OvertimeMail;
use App\Models\Overtime;
use Carbon\Carbon;
use Illuminate\Http\Request;

class OvertimeController extends Controller
{
    public function index(){
        $data = Overtime::whereUserId(\Auth::id())->orderBy('overtime_at', 'asc')->get();
        $ot_minutes = Overtime::whereUserId(\Auth::id())->sum('overtime_minutes');
        $overtime_sum = $ot_minutes * 0.0166666666667;

        return view('overtime.index', [
            'data' => $data,
            'ot_sum' => $overtime_sum,
        ]);
    }

    public function store(Request $request){
        $povertime_date = $request->post('overtime_date');
        $pstart = $request->post('started_at');
        $pend = $request->post('ended_at');
        $preason = $request->post('reason');

        $ot = new Overtime;
        $ot->user_id = \Auth::id();
        $ot->overtime_at = Carbon::parse($povertime_date);
        $ot->started_at = Carbon::parse($pstart);
        $ot->ended_at = Carbon::parse($pend);
        $ot->reason = $preason;
        $overtime_minutes = Carbon::parse($pend)->diffInMinutes(Carbon::parse($pstart));
        if($request->post('type') == 'plus'){
            $ot->overtime_minutes = $overtime_minutes;
        }else{
            $ot->overtime_minutes = -$overtime_minutes;
        }

        $ot->save();

        \Mail::to('marcel.hering@computacenter.com')->send(new OvertimeMail($ot));

        return redirect()->action('OvertimeController@index');
    }

    public function delete(Request $request){
        Overtime::destroy($request->post('row_id'));

        return redirect()->action('OvertimeController@index');
    }
}
