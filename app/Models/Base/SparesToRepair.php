<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 02 Oct 2018 06:53:48 +0000.
 */

namespace App\Models\Base;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class SparesToRepair
 *
 * @property int $id
 * @property int $repair_id
 * @property int $spare_id
 * @property string $serial_old
 * @property string $serial_new
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @package App\Models\Base
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\SparesToRepair whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\SparesToRepair whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\SparesToRepair whereRepairId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\SparesToRepair whereSerialNew($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\SparesToRepair whereSerialOld($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\SparesToRepair whereSpareId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\SparesToRepair whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class SparesToRepair extends Eloquent
{
	protected $casts = [
		'repair_id' => 'int',
		'spare_id' => 'int'
	];
}
