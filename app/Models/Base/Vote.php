<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 14 Feb 2019 12:57:06 +0000.
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
 * @property \App\Models\Option $option
 * @property \App\Models\User $user
 * @package App\Models\Base
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Vote newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Vote newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Vote query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Vote whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Vote whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Vote whereOptionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Vote whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Vote whereUserId($value)
 * @mixin \Eloquent
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
