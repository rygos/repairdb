<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 16 Nov 2018 08:37:16 +0000.
 */

namespace App\Models\Base;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class KvaLimit
 *
 * @property int $id
 * @property int $customer_id
 * @property int $model_id
 * @property float $max_price
 * @property string $remark
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @package App\Models\Base
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\KvaLimit whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\KvaLimit whereCustomerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\KvaLimit whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\KvaLimit whereMaxPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\KvaLimit whereModelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\KvaLimit whereRemark($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\KvaLimit whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class KvaLimit extends Eloquent
{
	protected $casts = [
		'customer_id' => 'int',
		'model_id' => 'int',
		'max_price' => 'float'
	];
}
