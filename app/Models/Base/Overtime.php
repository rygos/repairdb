<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 10 May 2019 12:24:12 +0000.
 */

namespace App\Models\Base;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Overtime
 * 
 * @property int $id
 * @property int $user_id
 * @property \Carbon\Carbon $overtime_at
 * @property \Carbon\Carbon $started_at
 * @property \Carbon\Carbon $ended_at
 * @property int $overtime_minutes
 * @property string $reason
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property int $submitted
 *
 * @package App\Models\Base
 */
class Overtime extends Eloquent
{
	protected $table = 'overtime';

	protected $casts = [
		'user_id' => 'int',
		'overtime_minutes' => 'int',
		'submitted' => 'int',
        'started_at',
        'ended_at'
	];

	protected $dates = [
        'overtime_at',

	];
}
