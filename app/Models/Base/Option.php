<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 19 Aug 2020 07:55:25 +0000.
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
 * @package App\Models\Base
 */
class Option extends Eloquent
{
	public $incrementing = false;

	protected $casts = [
		'id' => 'int',
		'poll_id' => 'int',
		'votes' => 'int'
	];
}
