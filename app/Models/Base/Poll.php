<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 19 Aug 2020 07:55:25 +0000.
 */

namespace App\Models\Base;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Poll
 * 
 * @property int $id
 * @property string $question
 * @property int $maxCheck
 * @property int $isClosed
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models\Base
 */
class Poll extends Eloquent
{
	public $incrementing = false;

	protected $casts = [
		'id' => 'int',
		'maxCheck' => 'int',
		'isClosed' => 'int'
	];
}
