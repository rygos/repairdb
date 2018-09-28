<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 25 Sep 2018 11:46:56 +0000.
 */

namespace App\Models\Base;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Rminstzlb
 * 
 * @property int $id
 * @property int $rminst
 * @property int $zlb
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property int $calltype_id
 * @property \Carbon\Carbon $zlb_created_at
 *
 * @package App\Models\Base
 */
class Rminstzlb extends Eloquent
{
	protected $table = 'rminstzlb';

	protected $casts = [
		'rminst' => 'int',
		'zlb' => 'int',
		'calltype_id' => 'int'
	];

	protected $dates = [
		'zlb_created_at'
	];
}
