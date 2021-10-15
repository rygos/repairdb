<?php

namespace App\Models;

/**
 * App\Models\RepairFile
 *
 * @property int $id
 * @property int $repair_id
 * @property string $file_name
 * @property string $file_ext
 * @property string $storage_path
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RepairFile newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RepairFile newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RepairFile query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RepairFile whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RepairFile whereFileExt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RepairFile whereFileName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RepairFile whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RepairFile whereRepairId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RepairFile whereStoragePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RepairFile whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class RepairFile extends \App\Models\Base\RepairFile
{
    protected $dateFormat = 'd-m-Y H:i:s';
	protected $fillable = [
		'repair_id',
		'file_name',
		'file_ext',
		'storage_path',
        'size',
        'type'
	];
}
