<?php

namespace App\Models;

/**
 * App\Models\Unit
 *
 * @property int $id
 * @property string $serial
 * @property int $manufacturer_id
 * @property int $model_id
 * @property int $customer_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Unit whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Unit whereCustomerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Unit whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Unit whereManufacturerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Unit whereModelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Unit whereSerial($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Unit whereUpdatedAt($value)
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Unit newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Unit newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Unit query()
 */
class Unit extends \App\Models\Base\Unit
{
	protected $fillable = [
		'serial',
		'manufacturer_id',
		'model_id',
		'customer_id'
	];

	public function model(){
	    return $this->hasOne('App\Models\Model', 'id', 'model_id')->first();
    }


}
