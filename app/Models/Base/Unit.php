<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 10 May 2019 12:24:13 +0000.
 */

namespace App\Models\Base;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Unit
 * 
 * @property int $id
 * @property string $serial
 * @property int $manufacturer_id
 * @property int $model_id
 * @property int $customer_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models\Base
 */
class Unit extends Eloquent
{
	protected $casts = [
		'manufacturer_id' => 'int',
		'model_id' => 'int',
		'customer_id' => 'int'
	];
}
