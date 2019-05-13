<?php

namespace App\Http\Controllers;

use App\Models\Scrap;
use Illuminate\Http\Request;

class ScrapeController extends Controller
{
    public function index(){
        $data = Scrap::whereScraped(0)->orderByDesc('id')->get();

        return view('scrape.index', [
            'data' => $data,
        ]);
    }

    public function store(Request $request){
        $serial = $request->get('serial');
        $imei = $request->get('imei');
        $pack = $request->get('pack');

        $s = new Scrap;
        $s->serial = $serial;
        $s->imei = $imei;
        $s->package = $pack;
        $s->scraped = 0;
        $s->save();

        return redirect()->action('ScrapeController@index');
    }
}
