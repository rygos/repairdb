<?php

namespace App\Models;

/**
 * App\Models\Vote
 *
 * @property int $id
 * @property int $user_id
 * @property int $option_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Option $option
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Vote newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Vote newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Vote query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Vote whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Vote whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Vote whereOptionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Vote whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Vote whereUserId($value)
 * @mixin \Eloquent
 */
class Vote extends \App\Models\Base\Vote
{
    //protected $dateFormat = 'd-m-Y H:i:s';
	protected $fillable = [
		'user_id',
		'option_id'
	];
}
