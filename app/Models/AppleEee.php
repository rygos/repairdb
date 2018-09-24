<?php

namespace App\Models;

/**
 * App\Models\AppleEee
 *
 * @property int $id
 * @property int $spare_id
 * @property string $eee
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AppleEee whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AppleEee whereEee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AppleEee whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AppleEee whereSpareId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AppleEee whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class AppleEee extends \App\Models\Base\AppleEee
{
	protected $fillable = [
		'spare_id',
		'eee'
	];
}
