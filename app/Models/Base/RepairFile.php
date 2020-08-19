<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 19 Aug 2020 07:55:25 +0000.
 */

namespace App\Models\Base;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class RepairFile
 * 
 * @property int $id
 * @property int $repair_id
 * @property string $file_name
 * @property string $file_ext
 * @property string $storage_path
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models\Base
 */
class RepairFile extends Eloquent
{
	public $incrementing = false;

	protected $casts = [
		'id' => 'int',
		'repair_id' => 'int'
	];
}
