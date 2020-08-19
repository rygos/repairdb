<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 19 Aug 2020 07:55:25 +0000.
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
