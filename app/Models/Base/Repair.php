<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 25 Sep 2018 11:46:56 +0000.
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
		'order_no' => 'int'
	];

	protected $dates = [
		'started_at',
		'closed_at'
	];
}
