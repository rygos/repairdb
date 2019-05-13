<?php

namespace App\Models;

class Scrap extends \App\Models\Base\Scrap
{
	protected $fillable = [
		'serial',
		'imei',
		'package',
		'scraped',
		'scrape_date'
	];

	public function unit(){
	    return $this->hasOne('App\Models\Unit', 'serial', 'serial')->latest();
    }
}
