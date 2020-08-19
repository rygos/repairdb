<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 19 Aug 2020 07:55:25 +0000.
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
	public $incrementing = false;

	protected $casts = [
		'id' => 'int',
		'doc_id' => 'int',
		'model_id' => 'int'
	];
}
