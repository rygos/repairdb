<?php

namespace App\Models;

class Gsxspare extends \App\Models\Base\Gsxspare
{
	protected $fillable = [
		'productname',
		'part',
		'partdesc',
		'parttype',
		'option',
		'price',
		'eee',
		'sparepart',
		'withsn',
		'withdiag'
	];
}
