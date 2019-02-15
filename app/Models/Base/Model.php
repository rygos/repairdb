<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 14 Feb 2019 12:57:06 +0000.
 */

namespace App\Models\Base;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Model
 *
 * @property int $id
 * @property int $manufacturer_id
 * @property string $model
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @package App\Models\Base
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Model newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Model newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Model query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Model whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Model whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Model whereManufacturerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Model whereModel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Model whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Model extends Eloquent
{
	protected $casts = [
		'manufacturer_id' => 'int'
	];
}
