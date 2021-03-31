<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Manufacturer;
use App\Models\Model;
use App\Models\ReapirLog;
use App\Models\Repair;
use App\Models\Rminstzlb;
use App\Models\Spare;
use App\Models\SparesToRepair;
use Carbon\Carbon;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Array_;
use Symfony\Component\Console\Input\Input;

class PartsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Spare::whereManufacturerId(3)->orderBy('sap_no')->get();

        return view('spares.index', [
            'data' => $data,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $manu = Manufacturer::orderBy('manufacturer')->get();
        $manu_res = array();
        foreach($manu as $i){
            $manu_res[$i->id] = $i->manufacturer;
        }

        $model = Model::orderBy('model')->get();
        $model_res = array();
        foreach ($model as $i){
            $model_res[$i->id] = $i->model;
        }

        $customer = Customer::orderBy('customer')->get();
        $customer_res = array();
        foreach($customer as $i){
            $customer_res[$i->id] = $i->customer;
        }

        return view('spares.create', [
            'manu' => $manu_res,
            'model' => $model_res,
            'customer' => $customer_res,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $s = new Spare;
        $s->sap_no = 47114711;
        $s->sap_desc = 'x';
        $s->manufacturer_id = $request->get('manufacturer');
        $s->model_id = $request->get('model');
        $s->customer_id = $request->get('customer');
        $s->manufacturer_part_no = $request->get('part_no');
        $s->manufacturer_part_desc = $request->get('part_desc');
        $s->manufacturer_remarks = $request->get('remarks');
        $s->price_replace = str_replace(',', '.', $request->get('price_replace'));
        $s->price_stock = str_replace(',', '.', $request->get('price_stock'));
        $s->price_stock_date = Carbon::now()->toDateString();
        $s->price_replace_date = Carbon::now()->toDateString();
        $s->save();

        return redirect()->action('HomeController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $part = Spare::whereId($id)->first();

        return view('spares.show', [
            'spare' => $part,
        ]);
    }

    public function show_we(){
        return view('spares.show_we', [
            'step' => 1,
            'spare_id' => 0,
        ]);
    }

    public function store_we(Request $request){
        $step = $request->post('step');
        if($step == 1){
            //Get part_id
            $part_no = $request->post('part_no');

            $part_id = Spare::whereManufacturerPartNo($part_no)->first()->id;
            $part = SparesToRepair::whereSpareId($part_id)->whereIn('status', [1, 2])->first();

            if($part){ //Wenn Teil angefordert
                return view('spares.show_we', [
                    'step' => 2,
                    'spare_id' => $part->id
                ]);
            }else{ //Wenn nicht angefordert
                return redirect()->action('PartsController@show_we');
            }

        }elseif($step == 2){
            //Save KGB Serial
            $part_id = $request->post('spare_id');
            $part = SparesToRepair::whereId($part_id)->first();
            $part->serial_new = $request->post('serial_no');
            $part->status = 3;
            $part->save();

            return redirect()->action('PartsController@show_we');
        }


    }

    public function show_wa(Request $request){
        $data = array();

        if($request->get('zlb')){
            $zlb_id = Rminstzlb::whereZlb($request->get('zlb'))->first()->id;
            $repair = Repair::whereRminstzlbId($zlb_id)->first()->id;
            $data = SparesToRepair::whereRepairId($repair)->get();
        }

        return view('spares.show_wa', [
            'data' => $data
        ]);
    }

    public function store_wa($id = 0){
        if($id != 0){
            $part = SparesToRepair::whereId($id)->first();
            $part->status = 5;
        }

        return redirect()->action('PartsController@show_wa');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function addToRepair(Request $request, $repair_id){
        $spareno = $request->get('spare');

        $spare = Spare::whereManufacturerPartNo($spareno)->first();
        if($spare){
            $spare_id = $spare->id;
        }else{
            return \Redirect::action('RepairController@show', $repair_id);
        }

        $sr = new SparesToRepair;
        $sr->repair_id = $repair_id;
        $sr->spare_id = $spare_id;
        $sr->status = 0;
        $sr->save();

        $rep = Repair::whereId($repair_id)->first();

        $log = new ReapirLog();
        $log->log = 'Add Spare: '.$spare->manufacturer_part_no.' - '.$spare->manufacturer_part_desc;
        $log->repair_id = $rep->id;
        $log->user_id = \Auth::id();
        $log->closing_reason_id = $rep->closing_reason_id;
        $log->save();

        return \Redirect::action('RepairController@show', $repair_id);
    }

    public function destroyFromRepair(Request $request){
        $spare = SparesToRepair::whereId($request->post('srid'))->first();

        $rep = Repair::whereId($spare->repair_id)->first();

        $log = new ReapirLog();
        $log->log = 'Remove Spare: '.$spare->spare->manufacturer_part_no.' - '.$spare->spare->manufacturer_part_desc;
        $log->repair_id = $rep->id;
        $log->user_id = \Auth::id();
        $log->closing_reason_id = $rep->closing_reason_id;
        $log->save();

        $item = SparesToRepair::destroy($request->post('srid'));

        return \Redirect::action('RepairController@show', $request->post('repair_id'));
    }

    public function updateSpareSn(Request $request){
        $sparerepair = SparesToRepair::whereId($request->get('sparerepair_id'))->first();
        $sparerepair->serial_new = $request->get('serial_new');
        $sparerepair->serial_old = $request->get('serial_old');
        $sparerepair->type_id = $request->get('type_id');
        $sparerepair->save();

        $rep = Repair::whereId($sparerepair->repair_id)->first();

        $log = new ReapirLog();
        $log->log = 'Change Spare Serial: '.$sparerepair->spare->manufacturer_part_no.' - '.$sparerepair->spare->manufacturer_part_desc.'<br>Old: '.$sparerepair->serial_old. ' - New: '.$sparerepair->serial_new;
        $log->repair_id = $rep->id;
        $log->user_id = \Auth::id();
        $log->closing_reason_id = $rep->closing_reason_id;
        $log->save();

        return redirect()->action('RepairController@show', $request->get('repair_id'));

    }
}
