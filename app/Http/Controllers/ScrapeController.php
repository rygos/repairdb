<?php

namespace App\Http\Controllers;

use App\Models\Scrap;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ScrapeController extends Controller
{
    public function index($pack = null){
        if(is_null($pack)){
            $data = Scrap::whereScraped(0)->orderByDesc('id')->get();
        }else{
            $data = Scrap::wherePackage($pack)->orderByDesc('id')->get();
        }


        $packs = Scrap::whereScraped(1)->groupBy('package')->get(['package']);

        //dd($packs);

        return view('scrape.index', [
            'data' => $data,
            'packs' => $packs,
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

        Scrap::whereScraped(0)
            ->update([
                'scraped' => '1',
                'scrape_date' => $time,
                'package' => $package,
            ]);

        return redirect()->action('ScrapeController@index');
    }
}
