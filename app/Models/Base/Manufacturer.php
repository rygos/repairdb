<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 25 Sep 2018 11:46:56 +0000.
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
