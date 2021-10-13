<?php

namespace App\Models;

class CrossCharge extends \App\Models\Base\CrossCharge
{
    protected $dateFormat = 'd-m-Y H:i:s';
	protected $fillable = [
		'service_order',
		'serial',
		'cost_centre',
		'cost_element',
		'amount',
		'text',
		'charged',
		'charged_date'
	];
}
