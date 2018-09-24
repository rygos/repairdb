<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 18 Sep 2018 08:13:42 +0000.
 */

namespace App\Models\Base;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class RepairType
 *
 * @property int $id
 * @property string $type
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @package App\Models\Base
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\RepairType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\RepairType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\RepairType whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\RepairType whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class RepairType extends Eloquent
{
	protected $table = 'repair_type';
}
