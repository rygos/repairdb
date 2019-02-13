<?php

namespace App\Http\Controllers;

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
        $data = Repair::where('user_id', '=', \Auth::id())->whereNotIn('closing_reason_id', [2,11])->orWhereNull('closing_reason_id')->orderBy('id')->get();

        return view('home.index', [
            'data' => $data
        ]);
    }

    public function index_all(){
        $data = Repair::whereNotIn('closing_reason_id', [2,11])->orWhereNull('closing_reason_id')->orderBy('id')->get();

        return view('home.index', [
            'data' => $data
        ]);
    }

    public function index_active_hh(){
        $res_rminst = Rminstzlb::where('calltype_id', '=', 6)->get();
        $res_rminst_ids = array();

        foreach($res_rminst as $i){
            $res_rminst_ids[] = $i->id;
        }

        $data = Repair::whereIn('rminstzlb_id', $res_rminst_ids)->whereNotIn('closing_reason_id', [2,11])->orWhereNull('closing_reason_id')->orderBy('id')->get();

        return view('home.index', [
            'data' => $data
        ]);
    }
}
