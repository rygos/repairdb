<?php

namespace App\Http\Controllers;

use App\Models\DOA;
use App\Models\DoaSpeedItem;
use Carbon\Carbon;
use Illuminate\Http\Request;
use League\Csv\Reader;

class DOAController extends Controller
{
    public function index(){
        $data = DOA::orderByDesc('id')->limit(10)->get();

        return view('doa.index', [
            'data' => $data
        ]);
    }

    public function index_all(Request $request, $from_date = '', $to_date = ''){
        if($request->get('from_date') == ''){
            $from_date = Carbon::now()->firstOfMonth();
        }else{
            $from_date = Carbon::parse($request->get('from_date'));
        }

        if($request->get('to_date') == ''){
            $to_date = Carbon::now();
        }else{
            $to_date = Carbon::parse($request->get('to_date'));
        }

        $data = DOA::whereBetween('created_at', [$from_date, $to_date])->get();

        return view('doa.index_all', [
            'data' => $data,
            'from_date' => $from_date,
            'to_date' => $to_date,
        ]);
    }

    public function store(Request $request){
        $doa = new DOA;
        $doa->sap_no = $request->get('sap_no');
        $doa->serial = $request->get('serial');
        $doa->service_order = $request->get('so');
        $doa->doa_description = $request->get('doa_desc');
        $doa->user_id = \Auth::id();
        $doa->save();

        return redirect(action('DOAController@index'));
    }

    public function delete($id){
        $doa = DOA::whereId($id)->delete();

        return redirect(action('DOAController@index'));
    }

    public function fileimport(Request $request){
        if($request->file('file')) {
            $file = $request->file('file');
            $filepath = $file->getRealPath();

            $csv = Reader::createFromPath($filepath, 'r');
            $csv->setHeaderOffset(0);
            $csv->setDelimiter(';');

            $records = $csv->getRecords(['sap_no', 'sap_desc']); //returns all the CSV records as an Iterator object

            foreach ($records as $offset => $record){
                $d = DoaSpeedItem::whereSapNo($record['sap_no'])->first();

                if($d->count() != 0){
                    $d->sap_desc = $record['sap_desc'];
                    $d->save();
                }else{
                    $do = new DoaSpeedItem;
                    $do->sap_no = $record['sap_no'];
                    $do->sap_desc = $record['sap_desc'];
                    $do->save();
                }
            }
            $do = new DoaSpeedItem;
            $do->sap_no = 4711;
            $do->sap_desc = Carbon::now();
            $do->save();
        }

        return redirect(action('AdminController@index'));
    }
}
