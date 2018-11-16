<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 16 Nov 2018 08:37:16 +0000.
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
