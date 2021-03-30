<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 19 Aug 2020 07:55:25 +0000.
 */

namespace App\Models\Base;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class SparesToRepair
 *
 * @property int $id
 * @property int $repair_id
 * @property int $spare_id
 * @property int $status
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
		'type_id' => 'int',
        'status' => 'int'
	];
}
