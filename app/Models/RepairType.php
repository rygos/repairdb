<?php

namespace App\Models;

/**
 * App\Models\RepairType
 *
 * @property int $id
 * @property string $type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RepairType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RepairType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RepairType whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RepairType whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class RepairType extends \App\Models\Base\RepairType
{
	protected $fillable = [
		'type'
	];
}
