<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 14 Feb 2019 12:57:06 +0000.
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
 * @property \App\Models\Poll $poll
 * @package App\Models\Base
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Option newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Option newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Option query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Option whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Option whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Option whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Option wherePollId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Option whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Option whereVotes($value)
 * @mixin \Eloquent
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
