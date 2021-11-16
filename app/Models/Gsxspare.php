<?php

namespace App\Models;

class Gsxspare extends \App\Models\Base\Gsxspare
{
    //protected $dateFormat = 'd-m-Y H:i:s';
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
