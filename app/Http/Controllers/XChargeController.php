<?php

namespace App\Http\Controllers;

use App\Models\CrossCharge;
use Illuminate\Http\Request;

class XChargeController extends Controller
{
    public function index(){
        $data = CrossCharge::get();

        return view('xcharge.xcharge',[
            'data' => $data,
        ]);
    }
}
