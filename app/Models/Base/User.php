<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 02 Oct 2018 06:53:48 +0000.
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
 * @package App\Models\Base
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\User whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class User extends Eloquent
{
	protected $dates = [
		'email_verified_at'
	];
}
