<?php

namespace App\Models;

/**
 * App\Models\Poll
 *
 * @property int $id
 * @property string $question
 * @property int $maxCheck
 * @property int $isClosed
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Option[] $options
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Poll newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Poll newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Poll query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Poll whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Poll whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Poll whereIsClosed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Poll whereMaxCheck($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Poll whereQuestion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Poll whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Poll extends \App\Models\Base\Poll
{
    protected $dateFormat = 'd-m-Y H:i:s';
	protected $fillable = [
		'question',
		'maxCheck',
		'isClosed'
	];
}
