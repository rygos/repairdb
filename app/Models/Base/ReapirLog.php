<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 19 Aug 2020 07:55:25 +0000.
 */

namespace App\Models\Base;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ReapirLog
 * 
 * @property int $id
 * @property int $repair_id
 * @property string $log
 * @property int $closing_reason_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property int $user_id
 *
 * @package App\Models\Base
 */
class ReapirLog extends Eloquent
{
	protected $table = 'reapir_log';

	protected $casts = [
		'repair_id' => 'int',
		'closing_reason_id' => 'int',
		'user_id' => 'int'
	];
}
