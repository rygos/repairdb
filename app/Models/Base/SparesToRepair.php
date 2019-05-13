<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 10 May 2019 12:24:13 +0000.
 */

namespace App\Models\Base;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class SparesToRepair
 * 
 * @property int $id
 * @property int $repair_id
 * @property int $spare_id
 * @property string $serial_old
 * @property string $serial_new
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property int $type_id
 *
 * @package App\Models\Base
 */
class SparesToRepair extends Eloquent
{
	protected $casts = [
		'repair_id' => 'int',
		'spare_id' => 'int',
		'type_id' => 'int'
	];
}
