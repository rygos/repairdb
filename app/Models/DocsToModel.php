<?php

namespace App\Models;

class DocsToModel extends \App\Models\Base\DocsToModel
{
    protected $dateFormat = 'd-m-Y H:i:s';
	protected $fillable = [
		'doc_id',
		'model_id'
	];
}
