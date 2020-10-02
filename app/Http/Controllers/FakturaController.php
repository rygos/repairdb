<?php

namespace App\Http\Controllers;

use App\Models\Base\Customer;
use App\Models\Repair;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FakturaController extends Controller
{
    public function index(Request $request, $search_start = '', $search_end = '', $customer = 'all'){
        //$data = Repair::orderByDesc('id')->get()->take(50);
        if($request->get('search_start') == ''){
            $search_start = new Carbon('first day of this month');
            $search_start = $search_start->startOfDay();
        }else{
            $search_start = Carbon::parse($request->get('search_start'));
        }

        if($request->get('search_end') == ''){
            $search_end = Carbon::now();
            $search_end = $search_end->endOfDay();
        }else{
            $search_end = Carbon::parse($request->get('search_end'));
        }

        if($request->get('customer') == 'all' or !$request->get('customer')){
            $data = Repair::whereIn('closing_reason_id', [2,11])->whereBetween('closed_at', [$search_start, $search_end])->get();
        }else{
            $data = Repair::whereIn('closing_reason_id', [2,11])->whereCustomerId($request->get('customer'))->whereBetween('closed_at', [$search_start, $search_end])->get();
        }

        $customers = Customer::get()->sortBy('customer');

        return view('faktura.index', [
            'data' => $data,
            'customers' => $customers,
            'search_start' => $search_start,
            'search_end' => $search_end,
        ]);
    }
}
