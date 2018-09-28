<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 25 Sep 2018 11:46:56 +0000.
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
 *
 * @package App\Models\Base
 */
class Model extends Eloquent
{
	protected $casts = [
		'manufacturer_id' => 'int'
	];
}
