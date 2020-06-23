<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 23 Jun 2020 15:36:57 +0000.
 */

namespace App\Models\Base;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class EeeeModel
 * 
 * @property int $id
 * @property string $eeee
 * @property int $model_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models\Base
 */
class EeeeModel extends Eloquent
{
	protected $table = 'eeee_model';

	protected $casts = [
		'model_id' => 'int'
	];
}
