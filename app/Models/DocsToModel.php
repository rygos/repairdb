<?php

namespace App\Models;

class DocsToModel extends \App\Models\Base\DocsToModel
{
	protected $fillable = [
		'doc_id',
		'model_id'
	];
}
