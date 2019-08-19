<?php

namespace App\Http\Controllers;

use App\Models\Model;
use App\Models\Repair;
use App\Models\Scrap;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ScrapeController extends Controller
{
    public function index($pack = null){
        $packview = 0;
        if(is_null($pack)){
            $data = Scrap::whereScraped(0)->orderByDesc('id')->get();
        }else{
            $data = Scrap::wherePackage($pack)->orderByDesc('id')->get();
            $packview = 1;
        }


        $packs = Scrap::whereScraped(1)->groupBy('package')->get(['package']);

        //dd($packs);

        return view('scrape.index', [
            'data' => $data,
            'packs' => $packs,
            'packview' => $packview,
        ]);
    }

    public function store(Request $request){
        $serial = $request->get('serial');
        $imei = $request->get('imei');
        //$pack = $request->get('pack');

        $s = new Scrap;
        $s->serial = $serial;
        $s->imei = $imei;
        //$s->package = $pack;
        $s->scraped = 0;
        $s->save();

        return redirect()->action('ScrapeController@index');
    }

    public function create_pack(){
        $package = time();
        $time = Carbon::now();

        $items = Scrap::where('scraped', '=', 0)
            ->update([
                'scraped' => '1',
                'scrape_date' => $time,
                'package' => $package,
            ]);

        //dd($items);

        return redirect()->action('ScrapeController@index');
    }

    public function export($pack){
        if($pack == 0){
            //Load List of Units without Package
            $data = Scrap::whereScraped(0)->orderByDesc('id')->get();
        }else{
            //Load Packed Units
            $data = Scrap::wherePackage($pack)->orderByDesc('id')->get();
        }

        $content = 'id,serial,imei,model,rminst,customer'.PHP_EOL;

        foreach ($data as $i){
            $model_db = null;
            $repair_db = null;
            $model = '';
            $customer = '';
            $rminst = '';
            if($i->unit){
                $model_db = Model::whereId($i->unit->model_id)->first();
                $repair_db = Repair::whereUnitId($i->unit->id)->first();
            }

            if(!is_null($model_db)){
                $model = $model_db->model;
            }else{
                $model = '';
            }

            if(!is_null($repair_db)){
                $rminst = $repair_db->rminst()->rminst;
                $customer = $repair_db->customer()->customer;
            }else{
                $rminst = '';
                $customer = '';
            }


            $content .= $i->id.','.$i->serial.','.$i->imei.',"'.$model.'",'.$rminst.','.$customer.PHP_EOL;
        }

        $filename = 'export_scrape.csv';
        $headers = [
            'Content-type' => 'text/plain',
            'Content-Disposition' => sprintf('attachment; filename="%s"', $filename),
        ];

        return \Response::make($content, 200, $headers);
    }
}
