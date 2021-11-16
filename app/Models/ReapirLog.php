<?php

namespace App\Models;

class ReapirLog extends \App\Models\Base\ReapirLog
{
    //protected $dateFormat = 'd-m-Y H:i:s';
	protected $fillable = [
		'repair_id',
		'log',
		'closing_reason_id'
	];
}
