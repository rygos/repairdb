<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 14 Feb 2019 12:57:06 +0000.
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
 * @property \Illuminate\Database\Eloquent\Collection $options
 * @package App\Models\Base
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Poll newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Poll newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Poll query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Poll whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Poll whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Poll whereIsClosed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Poll whereMaxCheck($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Poll whereQuestion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Poll whereUpdatedAt($value)
 * @mixin \Eloquent
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
