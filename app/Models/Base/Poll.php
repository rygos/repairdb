<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 21 Mar 2019 08:34:40 +0000.
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
 * @property \Illuminate\Database\Eloquent\Collection $options
 *
 * @package App\Models\Base
 */
class Poll extends Eloquent
{
	protected $casts = [
		'maxCheck' => 'int',
		'isClosed' => 'int'
	];

	public function options()
	{
		return $this->hasMany(\App\Models\Option::class);
	}
}
