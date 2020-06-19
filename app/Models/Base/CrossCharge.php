<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 19 Jun 2020 07:58:41 +0000.
 */

namespace App\Models\Base;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CrossCharge
 * 
 * @property int $id
 * @property int $service_order
 * @property string $serial
 * @property string $cost_centre
 * @property string $cost_element
 * @property float $amount
 * @property string $text
 * @property int $charged
 * @property \Carbon\Carbon $charged_date
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models\Base
 */
class CrossCharge extends Eloquent
{
	protected $casts = [
		'service_order' => 'int',
		'amount' => 'float',
		'charged' => 'int'
	];

	protected $dates = [
		'charged_date'
	];
}
