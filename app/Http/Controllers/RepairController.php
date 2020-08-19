<?php

namespace App\Http\Controllers;

use App\Console\Commands\repair\add;
use App\Models\CallType;
use App\Models\ClosingReason;
use App\Models\CrossCharge;
use App\Models\Customer;
use App\Models\EeeeModel;
use App\Models\KvaLimit;
use App\Models\Manufacturer;
use App\Models\Model;
use App\Models\ModelTypesXcharge;
use App\Models\ReapirLog;
use App\Models\Repair;
use App\Models\RepairType;
use App\Models\Rminstzlb;
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

        $model_type = ModelTypesXcharge::get();
        $model_type_res = array();
        foreach ($model_type as $i){
            if(substr($i->name, 0,7) == "CENTRAL"){
                $model_type_res[$i->id] = $i->short_name;
            }
        }

        return view('repair.create', [
            'manu' => $manu_res,
            'model' => $model_res,
            'customer' => $customer_res,
            'rep_type' => $rep_type_res,
            'call_type' => $call_type_res,
            'model_type' => $model_type_res,
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

        if($request->post('manufacturer_text') != ''){
            $manu = new Manufacturer;
            $manu->manufacturer = $request->post('manufacturer_text');
            $manu->save();
            $manufacturer_id = $manu->id;
        }else{
            $manufacturer_id = $request->post('manufacturer');
        }

        // EEEE Code des not exist
        if($request->post('model_text') != ''){
            $manu = new Model;
            $manu->model = $request->post('model_text');
            $manu->model_type_xcharge_id = $request->post('model_type');
            $manu->manufacturer_id = $manufacturer_id;
            $manu->save();
            $model_id = $manu->id;
        }else{
            $model_id = $request->post('model');
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

        $log = new ReapirLog;
        $log->log = 'Repair created in database.';
        $log->repair_id = $r->id;
        $log->user_id = \Auth::id();
        $log->save();


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
';

        $replog = ReapirLog::whereRepairId($data->id)->get();

        return view('repair.show',[
            'data' => $data,
            'reasons' => $reasons,
            'spares' => $spares_res,
            'kva' => $kva,
            'remark_template' => $remark_template,
            'replog' => $replog,
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
        $warranty = 0;
        $thirdpartydamage = 0;
        $kva_fee = 0;
        if($request->has('warranty')){
            $warranty = 1;
        }

        if($request->has('thirdpartydamage')){
            $thirdpartydamage = 1;
        }

        if($request->has('kva_costs')){
            $kva_fee = 1;
        }

        $rep = Repair::whereId($request->post('repair_id'))->first();
        $rep->remarks = $request->post('remark');
        $rep->costs = str_replace(",", ".", $request->post('costs'));
        $rep->warranty = $warranty;
        $rep->thirdpartydamage = $thirdpartydamage;
        $rep->kva_fee = $kva_fee;
        $rep->kva_costs = str_replace(",", ".", $request->post('kva_costs'));
        $rep->save();

        $log = new ReapirLog;
        $log->log = 'Remarks updated to: <br>'.$rep->remarks.'<br>
Warranty = '.$warranty. '<br>
Thirdparty damage = '.$thirdpartydamage;
        $log->repair_id = $rep->id;
        $log->user_id = \Auth::id();
        $log->closing_reason_id = $rep->closing_reason_id;
        $log->save();

        return redirect()->action('RepairController@show', $rep->id);
    }

    public function changestate(Request $request){
        //Save Status change to repair
        $rep = Repair::whereId($request->post('repair_id'))->first();
        $rep->closing_reason_id = $request->post('reason_id');
        $rep->closed_at = Carbon::now()->toDateString();
        $rep->save();

        //Get reason for status change
        $reason = ClosingReason::whereId($rep->closing_reason_id)->first();

        //create repair log.
        $log = new ReapirLog;
        $log->log = 'Change Repair state to: '.$reason->reason;
        $log->repair_id = $rep->id;
        $log->user_id = \Auth::id();
        $log->closing_reason_id = $rep->closing_reason_id;
        $log->save();

        //get service order
        $rminst = Rminstzlb::whereId($rep->rminstzlb_id)->first()->rminst;
        $model_type_id = Model::whereId($rep->model_id)->first()->model_type_xcharge_id;

        //build crosscharge positions
        //check for existing rows
        $xcharge_check = CrossCharge::whereRepairId($rep->id)->get()->count();
        if($xcharge_check == 0){
            //check for status and ndf
            if($rep->closing_reason_id == 2 or $rep->closing_reason_id == 11){
                $mtype = ModelTypesXcharge::whereId($model_type_id)->first();

                $this->add_cross($rminst, $rep->unit()->serial, $mtype->cost_center, $mtype->cost_element, $mtype->ppi, $mtype->name, $rep->id);

                if($rep->closing_reason_id == 2){
                    $logfee = ModelTypesXcharge::whereId(1)->first();
                    $reversefee = ModelTypesXcharge::whereId(2)->first();
                    foreach ($rep->spares() as $sp){
                        $this->add_cross($rminst, $rep->unit()->serial, $logfee->cost_center, $logfee->cost_element, $logfee->ppi, $logfee->name, $rep->id);
                        $this->add_cross($rminst, $rep->unit()->serial, $reversefee->cost_center, $reversefee->cost_element, $reversefee->ppi, $reversefee->name, $rep->id);
                    }

                    if(ReapirLog::whereRepairId($rep->id)->where('closing_reason_id', '=', 13)->count() != 0){
                        $kvafee = ModelTypesXcharge::whereId(3)->first();
                        $this->add_cross($rminst, $rep->unit()->serial, $kvafee->cost_center, $kvafee->cost_element, $kvafee->ppi, $kvafee->name, $rep->id);
                    }
                }
            }
        }

        return redirect()->action('RepairController@show', $rep->id);
    }

    //Add Crosscharge to Table
    function add_cross($so, $sn, $cc, $ce, $am, $text, $rep_id){
        $c = new CrossCharge;
        $c->service_order = $so;
        $c->serial = $sn;
        $c->cost_centre = $cc;
        $c->cost_element = $ce;
        $c->amount = $am;
        $c->text = $text;
        $c->repair_id = $rep_id;
        $c->charged = 0;
        $c->charged_date = Carbon::now();
        $c->save();
    }

    public function changegorderno(Request $request){
        $t = Repair::whereId($request->post('repair_id'))->first();
        $t->order_no = $request->post('orderno');
        $t->g_no = $request->post('gno');
        $t->save();

        $log = new ReapirLog;
        $log->log = 'Change G-No/OderNo: '.$t->g_no.'/'.$t->order_no;
        $log->repair_id = $t->id;
        $log->user_id = \Auth::id();
        $log->closing_reason_id = $t->closing_reason_id;
        $log->save();

        return redirect()->action('RepairController@show', $t->id);
    }

    public function upload_file(Request $request){
        $req = $request->file('file');
        $path = $req->store('repair');

        $ext = $req->extension();
        $name = $req->getClientOriginalName();
    }

    public function update_so(Request $request){
        //dd($request->post('sonew'));
        $so = Rminstzlb::whereId($request->post('sooldid'))->first();
        $soold = $so->rminst;
        $so->rminst = $request->post('sonew');
        $so->save();

        $log = new ReapirLog;
        $log->log = 'Change SO from '.$soold.' to '.$request->post('sonew');
        $log->repair_id = $request->post('repid');
        $log->user_id = \Auth::id();
        $log->closing_reason_id = Repair::whereId($request->post('repid'))->first()->closing_reason_id;
        $log->save();

        //return redirect()->action('RepairController@show', $request->post('repid'));
    }

}
