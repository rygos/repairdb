<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 16 Nov 2018 08:37:16 +0000.
 */

namespace App\Models\Base;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Manufacturer
 *
 * @property int $id
 * @property string $manufacturer
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @package App\Models\Base
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Manufacturer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Manufacturer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Manufacturer whereManufacturer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Manufacturer whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Manufacturer extends Eloquent
{
	protected $table = 'manufacturer';
}
