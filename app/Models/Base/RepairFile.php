<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 14 Feb 2019 12:57:06 +0000.
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
 * @package App\Models\Base
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\RepairFile newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\RepairFile newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\RepairFile query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\RepairFile whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\RepairFile whereFileExt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\RepairFile whereFileName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\RepairFile whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\RepairFile whereRepairId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\RepairFile whereStoragePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\RepairFile whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class RepairFile extends Eloquent
{
	protected $casts = [
		'repair_id' => 'int'
	];
}
