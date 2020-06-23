<?php

namespace App\Http\Controllers;

use App\Models\CrossCharge;
use App\Models\Customer;
use Carbon\Carbon;
use Illuminate\Http\Request;

class XChargeController extends Controller
{
    public function index($search_start = '', $search_end = '', $customer = ''){
        //$data = CrossCharge::get();
        $customer = Customer::get()->sortBy('customer');

        if($search_start == ''){
            $search_start = new Carbon('first day of this month');
        }
        if($search_end == ''){
            $search_end = Carbon::now();
        }

        $data = CrossCharge::get()->whereBetween('created_at', [$search_start, $search_end]);

        return view('xcharge.xcharge',[
            'data' => $data,
            'customers' => $customer,
        ]);
    }
}
