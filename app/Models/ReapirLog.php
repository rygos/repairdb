<?php

namespace App\Models;

class ReapirLog extends \App\Models\Base\ReapirLog
{
	protected $fillable = [
		'repair_id',
		'log',
		'closing_reason_id'
	];
}
