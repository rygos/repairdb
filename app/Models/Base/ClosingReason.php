<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 14 Feb 2019 12:57:06 +0000.
 */

namespace App\Models\Base;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ClosingReason
 *
 * @property int $id
 * @property string $reason
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @package App\Models\Base
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\ClosingReason newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\ClosingReason newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\ClosingReason query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\ClosingReason whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\ClosingReason whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\ClosingReason whereReason($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\ClosingReason whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ClosingReason extends Eloquent
{
	protected $table = 'closing_reason';
}
