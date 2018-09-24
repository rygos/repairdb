<?php

namespace App\Models;

/**
 * App\Models\CallType
 *
 * @property int $id
 * @property string $type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CallType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CallType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CallType whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CallType whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class CallType extends \App\Models\Base\CallType
{
	protected $fillable = [
		'type'
	];
}
