<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 14 Feb 2019 12:57:06 +0000.
 */

namespace App\Models\Base;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class EeeeModel
 *
 * @property int $id
 * @property string $eeee
 * @property int $model_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @package App\Models\Base
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\EeeeModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\EeeeModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\EeeeModel query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\EeeeModel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\EeeeModel whereEeee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\EeeeModel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\EeeeModel whereModelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\EeeeModel whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class EeeeModel extends Eloquent
{
	protected $table = 'eeee_model';

	protected $casts = [
		'model_id' => 'int'
	];
}
