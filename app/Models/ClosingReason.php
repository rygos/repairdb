<?php

namespace App\Models;

/**
 * App\Models\ClosingReason
 *
 * @property int $id
 * @property string $reason
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ClosingReason whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ClosingReason whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ClosingReason whereReason($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ClosingReason whereUpdatedAt($value)
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ClosingReason newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ClosingReason newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ClosingReason query()
 */
class ClosingReason extends \App\Models\Base\ClosingReason
{
	protected $fillable = [
		'reason'
	];
}
