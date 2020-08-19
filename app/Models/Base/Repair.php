<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 19 Aug 2020 07:55:25 +0000.
 */

namespace App\Models\Base;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Repair
 * 
 * @property int $id
 * @property \Carbon\Carbon $started_at
 * @property int $rminstzlb_id
 * @property int $customer_id
 * @property int $manufacturer_id
 * @property int $model_id
 * @property int $repair_type_id
 * @property int $closing_reason_id
 * @property string $remarks
 * @property \Carbon\Carbon $closed_at
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property int $unit_id
 * @property string $g_no
 * @property int $order_no
 * @property int $user_id
 * @property float $costs
 * @property int $warranty
 * @property int $thirdpartydamage
 * @property int $kva_fee
 * @property float $kva_costs
 *
 * @package App\Models\Base
 */
class Repair extends Eloquent
{
	protected $casts = [
		'rminstzlb_id' => 'int',
		'customer_id' => 'int',
		'manufacturer_id' => 'int',
		'model_id' => 'int',
		'repair_type_id' => 'int',
		'closing_reason_id' => 'int',
		'unit_id' => 'int',
		'order_no' => 'int',
		'user_id' => 'int',
		'costs' => 'float',
		'warranty' => 'int',
		'thirdpartydamage' => 'int',
		'kva_fee' => 'int',
		'kva_costs' => 'float'
	];

	protected $dates = [
		'started_at',
		'closed_at'
	];
}
