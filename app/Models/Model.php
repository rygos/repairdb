<?php

namespace App\Models;

/**
 * App\Models\Model
 *
 * @property int $id
 * @property int $manufacturer_id
 * @property string $model
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Model whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Model whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Model whereManufacturerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Model whereModel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Model whereUpdatedAt($value)
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Model newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Model newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Model query()
 */
class Model extends \App\Models\Base\Model
{
	protected $fillable = [
		'manufacturer_id',
		'model'
	];
}
