<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 21 Mar 2019 08:34:40 +0000.
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

	protected $casts = [
		'spare_id' => 'int'
	];
}
