<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 23 Jun 2020 15:36:57 +0000.
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
