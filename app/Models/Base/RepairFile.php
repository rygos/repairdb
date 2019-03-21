<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 21 Mar 2019 08:34:40 +0000.
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
	protected $casts = [
		'repair_id' => 'int'
	];
}
