<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 10 May 2019 12:24:13 +0000.
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
 * 
 * @property \Illuminate\Database\Eloquent\Collection $votes
 *
 * @package App\Models\Base
 */
class User extends Eloquent
{
	protected $dates = [
		'email_verified_at'
	];

	public function votes()
	{
		return $this->hasMany(\App\Models\Vote::class);
	}
}
