<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 22 Jun 2020 11:33:28 +0000.
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
