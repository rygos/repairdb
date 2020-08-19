<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 19 Aug 2020 07:55:25 +0000.
 */

namespace App\Models\Base;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class AppleEee
 * 
 * @property int $id
 * @property int $spare_id
 * @property string $eee
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models\Base
 */
class AppleEee extends Eloquent
{
	protected $table = 'apple_eee';
	public $incrementing = false;

	protected $casts = [
		'id' => 'int',
		'spare_id' => 'int'
	];
}
