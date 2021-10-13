<?php

namespace App\Models;

/**
 * App\Models\Option
 *
 * @property int $id
 * @property string $name
 * @property int $poll_id
 * @property \Illuminate\Database\Eloquent\Collection|\App\Models\Vote[] $votes
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Poll $poll
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Option newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Option newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Option query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Option whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Option whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Option whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Option wherePollId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Option whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Option whereVotes($value)
 * @mixin \Eloquent
 */
class Option extends \App\Models\Base\Option
{
    protected $dateFormat = 'd-m-Y H:i:s';
	protected $fillable = [
		'name',
		'poll_id',
		'votes'
	];
}
