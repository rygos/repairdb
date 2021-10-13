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
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AppleEee newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AppleEee newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AppleEee query()
 */
class AppleEee extends \App\Models\Base\AppleEee
{
    protected $dateFormat = 'd-m-Y H:i:s';
	protected $fillable = [
		'spare_id',
		'eee'
	];
}
