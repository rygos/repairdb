<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 23 Jun 2020 15:36:57 +0000.
 */

namespace App\Models\Base;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Model
 * 
 * @property int $id
 * @property int $manufacturer_id
 * @property string $model
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property int $model_type_xcharge_id
 *
 * @package App\Models\Base
 */
class Model extends Eloquent
{
	protected $casts = [
		'manufacturer_id' => 'int',
		'model_type_xcharge_id' => 'int'
	];
}
