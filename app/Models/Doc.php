<?php

namespace App\Models;

class Doc extends \App\Models\Base\Doc
{
	protected $fillable = [
		'title',
		'text',
		'user_id'
	];
}
