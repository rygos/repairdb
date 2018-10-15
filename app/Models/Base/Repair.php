<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 02 Oct 2018 06:53:48 +0000.
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
 * @package App\Models\Base
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Repair whereClosedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Repair whereClosingReasonId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Repair whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Repair whereCustomerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Repair whereGNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Repair whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Repair whereManufacturerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Repair whereModelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Repair whereOrderNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Repair whereRemarks($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Repair whereRepairTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Repair whereRminstzlbId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Repair whereStartedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Repair whereUnitId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Repair whereUpdatedAt($value)
 * @mixin \Eloquent
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
	];

	protected $dates = [
		'started_at',
		'closed_at'
	];
}
