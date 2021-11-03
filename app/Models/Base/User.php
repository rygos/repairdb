<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 19 Aug 2020 07:55:25 +0000.
 */

namespace App\Models\Base;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Carbon\Carbon $email_verified_at
 * @property string $password
 * @property string $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property int $access_overtime
 * @property int $access_xcharge
 * @property int $access_scrape
 * @property int $access_parts
 * @property int $access_reports
 * @property int $access_stats
 * @property int $access_repairs
 * @property int $access_admin
 * @property string $location
 *
 * @package App\Models\Base
 */
class User extends Eloquent
{
	protected $casts = [
		'access_overtime' => 'int',
		'access_xcharge' => 'int',
		'access_scrape' => 'int',
		'access_parts' => 'int',
		'access_reports' => 'int',
		'access_stats' => 'int',
		'access_repairs' => 'int',
        'access_admin' => 'int',
        'technician' => 'int',
	];

	protected $dates = [
		'email_verified_at'
	];
}
