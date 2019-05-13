<?php

namespace App\Models;

class DocsLog extends \App\Models\Base\DocsLog
{
	protected $fillable = [
		'title',
		'text',
		'user_id'
	];
}
