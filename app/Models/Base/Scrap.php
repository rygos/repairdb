<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 23 Jun 2020 15:36:57 +0000.
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
