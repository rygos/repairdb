<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 22 Jun 2020 11:33:29 +0000.
 */

namespace App\Models\Base;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Doc
 * 
 * @property int $id
 * @property string $title
 * @property string $text
 * @property int $user_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models\Base
 */
class Doc extends Eloquent
{
	protected $casts = [
		'user_id' => 'int'
	];
}
