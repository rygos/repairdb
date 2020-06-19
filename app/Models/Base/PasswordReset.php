<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 10 May 2019 12:24:12 +0000.
 */

namespace App\Models\Base;

use Reliese\Database\Eloquent\Model as Eloquent;

class PasswordReset extends Eloquent
{
	public $incrementing = false;
	public $timestamps = false;
}
