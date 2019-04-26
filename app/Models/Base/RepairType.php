<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 25 Apr 2019 13:56:30 +0000.
 */

namespace App\Models\Base;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class RepairType
 * 
 * @property int $id
 * @property string $type
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models\Base
 */
class RepairType extends Eloquent
{
	protected $table = 'repair_type';
}
