<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 19 Aug 2020 07:55:25 +0000.
 */

namespace App\Models\Base;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ModelTypesXcharge
 * 
 * @property int $id
 * @property string $short_name
 * @property string $name
 * @property float $ppi
 * @property string $cost_center
 * @property string $cost_element
 * @property int $per_part
 * @property int $per_call
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models\Base
 */
class ModelTypesXcharge extends Eloquent
{
	protected $table = 'model_types_xcharge';
	public $incrementing = false;

	protected $casts = [
		'id' => 'int',
		'ppi' => 'float',
		'per_part' => 'int',
		'per_call' => 'int'
	];
}
