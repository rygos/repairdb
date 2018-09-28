<?php

namespace App\Http\Controllers;

use App\Models\Repair;
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
        $data = Repair::whereNotIn('closing_reason_id', [2])->orWhereNull('closing_reason_id')->orderBy('started_at')->get();

        return view('home.index', [
            'data' => $data
        ]);
    }
}
