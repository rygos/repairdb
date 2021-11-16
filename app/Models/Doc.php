<?php

namespace App\Models;

class Doc extends \App\Models\Base\Doc
{
    //protected $dateFormat = 'd-m-Y H:i:s';
	protected $fillable = [
		'title',
		'text',
		'user_id'
	];
}
