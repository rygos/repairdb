<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 19 Aug 2020 07:55:25 +0000.
 */

namespace App\Models\Base;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class DocsLog
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
class DocsLog extends Eloquent
{
	protected $table = 'docs_log';
	public $incrementing = false;

	protected $casts = [
		'id' => 'int',
		'user_id' => 'int'
	];
}
