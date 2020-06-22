<?php

namespace App\Http\Controllers;

use App\Models\CrossCharge;
use App\Models\Customer;
use Illuminate\Http\Request;

class XChargeController extends Controller
{
    public function index(){
        $data = CrossCharge::get();
        $customer = Customer::get()->sortBy('customer');

        return view('xcharge.xcharge',[
            'data' => $data,
            'customers' => $customer,
        ]);
    }
}
