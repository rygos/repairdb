<?php

namespace App\Models;

class DocsLog extends \App\Models\Base\DocsLog
{
    //protected $dateFormat = 'd-m-Y H:i:s';
	protected $fillable = [
		'title',
		'text',
		'user_id'
	];
}
