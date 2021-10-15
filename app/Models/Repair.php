<?php

namespace App\Models;

/**
 * App\Models\Repair
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon $started_at
 * @property int $rminstzlb_id
 * @property int $customer_id
 * @property string $serial
 * @property int $manufacturer_id
 * @property int $model_id
 * @property int $repair_type_id
 * @property int $closing_reason_id
 * @property string $remarks
 * @property \Illuminate\Support\Carbon $closed_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Repair whereClosedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Repair whereClosingReasonId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Repair whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Repair whereCustomerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Repair whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Repair whereManufacturerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Repair whereModelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Repair whereRemarks($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Repair whereRepairTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Repair whereRminstzlbId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Repair whereSerial($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Repair whereStartedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Repair whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property int $unit_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Repair whereUnitId($value)
 * @property-read \App\Models\Rminstzlb $rminst
 * @property string|null $g_no
 * @property int|null $order_no
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Repair whereGNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Repair whereOrderNo($value)
 * @property int $user_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Repair whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Repair newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Repair newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Repair query()
 */
class Repair extends \App\Models\Base\Repair
{
    protected $dateFormat = 'd-m-Y H:i:s';
	protected $fillable = [
		'started_at',
		'rminstzlb_id',
		'customer_id',
		'serial',
		'manufacturer_id',
		'model_id',
		'repair_type_id',
		'closing_reason_id',
		'remarks',
		'closed_at',
        'user_id',
	];

	public function rminst(){
	    return $this->hasOne('App\Models\Rminstzlb', 'id', 'rminstzlb_id')->first();
    }

    public function customer(){
	    return $this->hasOne('App\Models\Customer', 'id', 'customer_id')->first();
    }

    public function unit(){
	    return $this->hasOne('App\Models\Unit', 'id', 'unit_id')->first();
    }

    public function manufacturer(){
	    return $this->hasOne('App\Models\Manufacturer', 'id', 'manufacturer_id')->first();
    }

    public function model(){
	    return $this->hasOne('App\Models\Model', 'id', 'model_id')->first();
    }

    public function reptype(){
	    return $this->hasOne('App\Models\RepairType', 'id', 'repair_type_id')->first();
    }

    public function spares(){
	    return $this->hasMany('App\Models\SparesToRepair', 'repair_id', 'id')->get();
    }

    public function user(){
	    return $this->hasOne('App\Models\User', 'id', 'user_id')->first();
    }

    public function closing_reason(){
	    return $this->hasOne('App\Models\ClosingReason', 'id', 'closing_reason_id')->first();
    }

    public function files(){
        return $this->hasMany('App\Models\RepairFile', 'repair_id', 'id')->get();
    }
}
