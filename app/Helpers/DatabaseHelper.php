<?php
/**
 * Application: repairdb.
 * User: marcelhering
 * Date: 14.09.18
 * Time: 12:22
 */

function close_reapir($id, $reason_id, $date){
    $t = \App\Models\Repair::whereId($id)->first();
    $t->closing_reason_id = $reason_id;
    $t->closed_at = $date;
    $t->save();

    return;
}

function insert_zlbrminst($zlb_created_at, $zlb, $rminst, $calltype_id){
    $rm = \App\Models\Rminstzlb::firstOrCreate([
        'rminst' => $rminst,
        'zlb' => $zlb,
        'calltype_id' => $calltype_id,
        'zlb_created_at' => \Carbon\Carbon::parse($zlb_created_at)->toDateString()
    ]);

    $rm->save();
    return $rm->id;
}

function insert_calltype($calltype){
    $ct = \App\Models\CallType::firstOrCreate(['type' => $calltype]);
    $ct->save();
    return $ct->id;
}

function insert_customer($customer){
    $ct = \App\Models\Customer::firstOrCreate(['customer' => $customer]);
    $ct->save();
    return $ct->id;
}

function insert_unit($serial, $manufacturer_id, $model_id, $customer_id){
    $u = \App\Models\Unit::firstOrCreate([
        'serial' => $serial,
        'manufacturer_id' => $manufacturer_id,
        'model_id' => $model_id,
        'customer_id' => $customer_id
    ]);
    $u->save();
    return $u->id;
}

function insert_manufacturer($manufacturer){
    $m = \App\Models\Manufacturer::firstOrCreate(['manufacturer' => $manufacturer]);
    $m->save();
    return $m->id;
}

function insert_models($model, $manu_id){
    $m = \App\Models\Model::firstOrCreate(['model' => $model, 'manufacturer_id' => $manu_id]);
    $m->save();
    return $m->id;
}

function insert_repairtype($repairtype){
    $rt = \App\Models\RepairType::firstOrCreate([
        'type' => $repairtype
    ]);
    $rt->save();
    return $rt->id;
}

function insert_closingreason($reason){
    $cr = \App\Models\ClosingReason::firstOrCreate([
        'reason' => $reason
    ]);
    $cr->save();
    return $cr->id;
}