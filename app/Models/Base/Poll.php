<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 22 Jun 2020 16:45:53 +0000.
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
