<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 14 Feb 2019 12:57:06 +0000.
 */

namespace App\Models\Base;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CallType
 *
 * @property int $id
 * @property string $type
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @package App\Models\Base
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\CallType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\CallType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\CallType query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\CallType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\CallType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\CallType whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\CallType whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class CallType extends Eloquent
{
	protected $table = 'call_type';
}
