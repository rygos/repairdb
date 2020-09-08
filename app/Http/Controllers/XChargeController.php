<?php

namespace App\Http\Controllers;

use App\Models\CrossCharge;
use App\Models\Customer;
use Carbon\Carbon;
use Illuminate\Http\Request;

class XChargeController extends Controller
{
    public function reactivate(){

    }

    public function export($export_type){
        $content = '';
        $filename = '';

        if($export_type == "handling"){
            $data = CrossCharge::whereCharged(0)->where('text', 'not like', "CENTRAL%")->get();
            $filename = 'export_handling.csv';
            $content .= 'Kostenstelle;Serviceorder;Kostenart;Betrag;Text'.PHP_EOL;
        }elseif($export_type == "central"){
            $data = CrossCharge::whereCharged(0)->where('text', 'LIKE', "CENTRAL%")->get();
            $filename = 'export_central.csv';
            $content .= 'Kostenstelle;Serviceorder;Leistungsart;Betrag;Text'.PHP_EOL;
        }

        foreach ($data as $i ){
            $kostenstelle = $i->cost_centre;
            $serviceorder = $i->service_order;
            if($export_type == "handling"){
                $kostenart = $i->cost_element;
            }elseif($export_type == "central"){
                $kostenart = "CDIP";
            }
            //$kostenart = $i->cost_element;

            //Currency Formatter
            $betrag = number_format($i->amount,2, ",", ".");
            $text = $i->text;

            //$i->charged = 1;
            //$i->charged_date = Carbon::now();
            if($i->amount != 0){
                $content .= $kostenstelle.';'.$serviceorder.';'.$kostenart.';'.$betrag.';'.$text.PHP_EOL;
            }

            //$i->save();
        }


        $headers = [
            'Content-type' => 'text/plain',
            'Content-Disposition' => sprintf('attachment; filename="%s"', $filename),
        ];

        return \Response::make($content, 200, $headers);

        //return $content;
    }

    public function index(Request $request, $search_start = '', $search_end = ''){
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
            'search_start' => $search_start->addDay(),
            'search_end' => $search_end->addDays(-1),
        ]);
    }
}
