<?php

namespace App\Http\Controllers;

use App\Models\CallType;
use App\Models\ClosingReason;
use App\Models\Customer;
use App\Models\EeeeModel;
use App\Models\KvaLimit;
use App\Models\Manufacturer;
use App\Models\Model;
use App\Models\Repair;
use App\Models\RepairType;
use App\Models\Spare;
use Carbon\Carbon;
use Illuminate\Http\Request;

class RepairController extends Controller
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

        $rep_type = RepairType::orderBy('type')->get();
        $rep_type_res = array();
        foreach($rep_type as $i){
            $rep_type_res[$i->id] = $i->type;
        }

        $call_type = CallType::orderBy('type')->get();
        $call_type_res = array();
        foreach($call_type as $i){
            $call_type_res[$i->id] = $i->type;
        }

        return view('repair.create', [
            'manu' => $manu_res,
            'model' => $model_res,
            'customer' => $customer_res,
            'rep_type' => $rep_type_res,
            'call_type' => $call_type_res,
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
        $request->validate([
            'zlb_created_at' => 'date|required',
            'started_at' => 'date|required',
            'rminst' => 'numeric|required',
            'zlb' => 'numeric|required',
            'serial' => 'required',
        ]);

        //Get EEEE Code from Serial Number
        $serial = strtoupper($request->post('serial'));
        $eeee_code = substr($serial, -4);
        //Search for EEEE Code
        $eeee = EeeeModel::whereEeee($eeee_code)->first();


        $r = new Repair;
        $r->started_at = Carbon::parse($request->post('started_at'))->toDateString();
        $r->rminstzlb_id = insert_zlbrminst(Carbon::parse($request->post('zlb_created_at'))->toDateString(), $request->post('zlb'), $request->post('rminst'), $request->post('call_type'));
        if($request->post('customer_text') != ''){
            $cust = new Customer;
            $cust->customer = $request->post('customer_text');
            $cust->save();
            $r->customer_id = $cust->id;
        }else{
            $r->customer_id = $request->post('customer');
        }

        // EEEE Code des not exist
        if($request->post('model_text') != ''){
            $manu = new Model;
            $manu->model = $request->post('model_text');
            $manu->manufacturer_id = $r->manufacturer_id;
            $manu->save();
            $model_id = $manu->id;
        }else{
            $model_id = $request->post('model');
        }

        if($request->post('manufacturer_text') != ''){
            $manu = new Manufacturer;
            $manu->manufacturer = $request->post('manufacturer_text');
            $manu->save();
            $manufacturer_id = $manu->id;
        }else{
            $manufacturer_id = $request->post('manufacturer');
        }

        if($eeee === null){
            $ins = new EeeeModel;
            $ins->eeee = $eeee_code;
            $ins->model_id = $model_id;
            $ins->save();

        }else{
            // EEEE Code exists
            $model_id = $eeee->model()->id;
            $manufacturer_id = $eeee->model()->manufacturer_id;
        }
        $r->model_id = $model_id;
        $r->manufacturer_id = $manufacturer_id;

        if($request->post('repair_type_text') != ''){
            $manu = new RepairType;
            $manu->type = $request->post('repair_type_text');
            $manu->save();
            $r->repair_type_id = $manu->id;
        }else{
            $r->repair_type_id = $request->post('repair_type');
        }

        $r->unit_id = insert_unit($request->post('serial'), $r->manufacturer_id, $r->model_id, $r->customer_id);
        $r->user_id = \Auth::id();
        $r->save();

        return redirect()->action('RepairController@show', $r->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Repair::whereId($id)->first();
        $reasons = ClosingReason::orderBy('reason')->get();

        $spares = Spare::where('manufacturer_id', '=', $data->manufacturer_id)
            ->where('model_id', '=', $data->model_id)
            ->orderBy('sap_desc')->get();
        $spares_res = array();
        foreach($spares as $i){
            $spares_res[$i->sap_no] = $i->sap_no.' - '. $i->sap_desc.' ('.$i->manufacturer_part_no.')';
        }

        $kva = KvaLimit::where('customer_id', '=', $data->customer_id)
            ->where('model_id', '=', $data->model_id)
            ->first();

        $remark_template = Carbon::now()->format('d.m.').' - Aktion: &#13;
------------&#13;
Gemeldet: &#13;
Diagnose: &#13;
MRI: &#13;
-------------
Kostenpflichtig: &#13;
Hersteller-Garantie: &#13;';

        return view('repair.show',[
            'data' => $data,
            'reasons' => $reasons,
            'spares' => $spares_res,
            'kva' => $kva,
            'remark_template' => $remark_template,
        ]);
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

    public function storeremark(Request $request){
        $rep = Repair::whereId($request->post('repair_id'))->first();
        $rep->remarks = $request->post('remark');
        $rep->save();

        return redirect()->action('RepairController@show', $rep->id);
    }

    public function changestate(Request $request){
        $rep = Repair::whereId($request->post('repair_id'))->first();
        $rep->closing_reason_id = $request->post('reason_id');
        $rep->closed_at = Carbon::now()->toDateString();
        $rep->save();

        return redirect()->action('RepairController@show', $rep->id);
    }

    public function changegorderno(Request $request){
        $t = Repair::whereId($request->post('repair_id'))->first();
        $t->order_no = $request->post('orderno');
        $t->g_no = $request->post('gno');
        $t->save();

        return redirect()->action('RepairController@show', $t->id);
    }

    public function upload_file(Request $request){
        $req = $request->file('file');
        $path = $req->store('repair');

        $ext = $req->extension();
        $name = $req->getClientOriginalName();
    }

}
