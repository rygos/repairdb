<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 10 May 2019 12:24:12 +0000.
 */

namespace App\Models\Base;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class DocsToModel
 * 
 * @property int $id
 * @property int $doc_id
 * @property int $model_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models\Base
 */
class DocsToModel extends Eloquent
{
	protected $table = 'docs_to_model';

	protected $casts = [
		'doc_id' => 'int',
		'model_id' => 'int'
	];
}