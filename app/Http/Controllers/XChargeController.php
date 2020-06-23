<?php

namespace App\Http\Controllers;

use App\Models\CrossCharge;
use App\Models\Customer;
use Carbon\Carbon;
use Illuminate\Http\Request;

class XChargeController extends Controller
{
    public function index(Request $request, $search_start = '', $search_end = '', $customer = ''){
        //$data = CrossCharge::get();
        $customer = Customer::get()->sortBy('customer');

        if($request->get('search_start') == ''){
            $search_start = new Carbon('first day of this month');
        }else{
            $search_start = Carbon::parse($request->get('search_start'));
        }

        if($request->get('search_end') == ''){
            $search_end = Carbon::now();
        }else{
            $search_end = Carbon::parse($request->get('search_end'));
        }

        $data = CrossCharge::get()->whereBetween('created_at', [$search_start->addDays(-1), $search_end->addDay()]);

        return view('xcharge.xcharge',[
            'data' => $data,
            'customers' => $customer,
            'search_start' => $search_start,
            'search_end' => $search_end,
        ]);
    }
}
