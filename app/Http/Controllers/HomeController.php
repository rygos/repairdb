<?php

namespace App\Http\Controllers;

use App\Models\Base\User;
use App\Models\Repair;
use App\Models\Rminstzlb;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$data = Repair::where('user_id', '=', \Auth::id())->whereNotIn('closing_reason_id', [2,11])->orWhereNull('closing_reason_id')->orderBy('id')->get();
        $data = Repair::where('user_id', '=', \Auth::id())->whereNotIn('closing_reason_id', [2, 11, 15])->orderBy('id')->get();

        $new = Repair::whereNull('closing_reason_id')->where('location', '=', \Auth::user()->location)->get();
        //dd($data);

        return view('home.index', [
            'data' => $data,
            'new' => $new,
        ]);
    }

    public function index_all(){
        $data = Repair::where('location', '=', \Auth::user()->location)->whereNotIn('closing_reason_id', [2, 11, 15])->orWhereNull('closing_reason_id')->orderBy('id')->get();

        return view('home.index', [
            'data' => $data,
            'new' => 0
        ]);
    }

    public function index_active_hh(){
        $res_rminst = Rminstzlb::where('location', '=', 'DEHH')->get();
        $res_rminst_ids = array();

        foreach($res_rminst as $i){
            $res_rminst_ids[] = $i->id;
        }

        $data = Repair::whereIn('rminstzlb_id', $res_rminst_ids)->whereNotIn('closing_reason_id', [2,11,15])->orderBy('id')->get();

        return view('home.index', [
            'data' => $data,
            'new' => 0
        ]);
    }
}
