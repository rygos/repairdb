<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Manufacturer;
use App\Models\Model;
use App\Models\Repair;
use App\Models\Spare;
use App\Models\SparesToRepair;
use Carbon\Carbon;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Array_;

class PartsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $s->sap_no = $request->get('sap_no');
        $s->sap_desc = $request->get('sap_desc');
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
        //
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
        $sap = $request->get('spare');
        $spare = Spare::whereSapNo($sap)->first();
        if($spare){
            $spare_id = $spare->id;
        }else{
            $spare = Spare::whereManufacturerPartNo($sap)->first();
            if($spare){
                $spare_id = $spare->id;
            }else{
                return \Redirect::action('RepairController@show', $repair_id);
            }
        }

        $sr = new SparesToRepair;
        $sr->repair_id = $repair_id;
        $sr->spare_id = $spare_id;
        $sr->save();

        return \Redirect::action('RepairController@show', $repair_id);
    }

    public function destroyFromRepair(Request $request){
        $item = SparesToRepair::destroy($request->post('srid'));

        return \Redirect::action('RepairController@show', $request->post('repair_id'));
    }

    public function updateSpareSn(Request $request){
        $sparerepair = SparesToRepair::whereId($request->get('sparerepair_id'))->first();
        $sparerepair->serial_new = $request->get('serial_new');
        $sparerepair->serial_old = $request->get('serial_old');
        $sparerepair->type_id = $request->get('type_id');
        $sparerepair->save();

        return redirect()->action('RepairController@show', $request->get('repair_id'));

    }
}
