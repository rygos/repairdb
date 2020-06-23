<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 23 Jun 2020 15:36:57 +0000.
 */

namespace App\Models\Base;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Option
 * 
 * @property int $id
 * @property string $name
 * @property int $poll_id
 * @property int $votes
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\Models\Poll $poll
 *
 * @package App\Models\Base
 */
class Option extends Eloquent
{
	protected $casts = [
		'poll_id' => 'int',
		'votes' => 'int'
	];

	public function poll()
	{
		return $this->belongsTo(\App\Models\Poll::class);
	}

	public function votes()
	{
		return $this->hasMany(\App\Models\Vote::class);
	}
}
