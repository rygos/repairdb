<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 23 Jun 2020 15:36:57 +0000.
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

	protected $casts = [
		'ppi' => 'float',
		'per_part' => 'int',
		'per_call' => 'int'
	];
}
