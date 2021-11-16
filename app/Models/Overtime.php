<?php

namespace App\Models;

class Overtime extends \App\Models\Base\Overtime
{
    //protected $dateFormat = 'd-m-Y H:i:s';
	protected $fillable = [
		'user_id',
		'overtime_at',
		'started_at',
		'ended_at',
		'overtime_minutes',
		'reason'
	];
}
