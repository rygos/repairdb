<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 23 Jun 2020 15:36:57 +0000.
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
