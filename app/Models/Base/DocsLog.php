<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 23 Jun 2020 15:36:57 +0000.
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

	protected $casts = [
		'user_id' => 'int'
	];
}
