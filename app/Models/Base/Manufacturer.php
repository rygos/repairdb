<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 19 Jun 2020 07:58:41 +0000.
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
 *
 * @package App\Models\Base
 */
class Manufacturer extends Eloquent
{
	protected $table = 'manufacturer';
}
