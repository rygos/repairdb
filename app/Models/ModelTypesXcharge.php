<?php

namespace App\Models;

class ModelTypesXcharge extends \App\Models\Base\ModelTypesXcharge
{
    protected $dateFormat = 'd-m-Y H:i:s';
	protected $fillable = [
		'short_name',
		'name',
		'ppi',
		'cost_center',
		'cost_element',
		'per_part',
		'per_call'
	];
}
