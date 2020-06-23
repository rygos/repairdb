<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 23 Jun 2020 15:36:57 +0000.
 */

namespace App\Models\Base;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Vote
 * 
 * @property int $id
 * @property int $user_id
 * @property int $option_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\Models\Option $option
 * @property \App\Models\User $user
 *
 * @package App\Models\Base
 */
class Vote extends Eloquent
{
	protected $casts = [
		'user_id' => 'int',
		'option_id' => 'int'
	];

	public function option()
	{
		return $this->belongsTo(\App\Models\Option::class);
	}

	public function user()
	{
		return $this->belongsTo(\App\Models\User::class);
	}
}
