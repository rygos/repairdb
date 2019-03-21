<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 21 Mar 2019 08:34:40 +0000.
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
 *
 * @package App\Models\Base
 */
class KvaLimit extends Eloquent
{
	protected $casts = [
		'customer_id' => 'int',
		'model_id' => 'int',
		'max_price' => 'float'
	];
}
