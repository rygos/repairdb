<?php

namespace App\Models;

/**
 * App\Models\KvaLimit
 *
 * @property int $id
 * @property int $customer_id
 * @property int $model_id
 * @property float $max_price
 * @property string $remark
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\KvaLimit whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\KvaLimit whereCustomerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\KvaLimit whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\KvaLimit whereMaxPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\KvaLimit whereModelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\KvaLimit whereRemark($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\KvaLimit whereUpdatedAt($value)
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\KvaLimit newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\KvaLimit newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\KvaLimit query()
 */
class KvaLimit extends \App\Models\Base\KvaLimit
{
	protected $fillable = [
		'customer_id',
		'model_id',
		'max_price',
		'remark'
	];
}
