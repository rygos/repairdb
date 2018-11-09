<?php

namespace App\Models;

/**
 * App\Models\SparesToRepair
 *
 * @property int $id
 * @property int $repair_id
 * @property int $spare_id
 * @property string $serial_old
 * @property string $serial_new
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SparesToRepair whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SparesToRepair whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SparesToRepair whereRepairId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SparesToRepair whereSerialNew($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SparesToRepair whereSerialOld($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SparesToRepair whereSpareId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SparesToRepair whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \App\Models\Repair $repair
 * @property-read \App\Models\Spare $spare
 */
class SparesToRepair extends \App\Models\Base\SparesToRepair
{
	protected $fillable = [
		'repair_id',
		'spare_id',
		'serial_old',
		'serial_new',
        'type_id'
	];

    public function spare(){
        return $this->hasOne('App\Models\Spare', 'id', 'spare_id');
    }

    public function repair(){
        return $this->hasOne('App\Models\Repair', 'id', 'repair_id');
    }
}
