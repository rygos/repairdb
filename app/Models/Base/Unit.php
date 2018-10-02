<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 02 Oct 2018 06:53:48 +0000.
 */

namespace App\Models\Base;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Unit
 *
 * @property int $id
 * @property string $serial
 * @property int $manufacturer_id
 * @property int $model_id
 * @property int $customer_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @package App\Models\Base
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Unit whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Unit whereCustomerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Unit whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Unit whereManufacturerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Unit whereModelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Unit whereSerial($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Unit whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Unit extends Eloquent
{
	protected $casts = [
		'manufacturer_id' => 'int',
		'model_id' => 'int',
		'customer_id' => 'int'
	];
}
