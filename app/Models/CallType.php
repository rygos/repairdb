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
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CallType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CallType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CallType query()
 */
class CallType extends \App\Models\Base\CallType
{
    protected $dateFormat = 'd-m-Y H:i:s';
	protected $fillable = [
		'type'
	];
}
