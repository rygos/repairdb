<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 19 Aug 2020 07:55:25 +0000.
 */

namespace App\Models\Base;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Scrap
 * 
 * @property int $id
 * @property string $serial
 * @property string $imei
 * @property string $package
 * @property int $scraped
 * @property \Carbon\Carbon $scrape_date
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models\Base
 */
class Scrap extends Eloquent
{
	protected $table = 'scrap';

	protected $casts = [
		'scraped' => 'int'
	];

	protected $dates = [
		'scrape_date'
	];
}
