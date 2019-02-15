<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 14 Feb 2019 12:57:06 +0000.
 */

namespace App\Models\Base;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Rminstzlb
 *
 * @property int $id
 * @property int $rminst
 * @property int $zlb
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property int $calltype_id
 * @property \Carbon\Carbon $zlb_created_at
 * @package App\Models\Base
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Rminstzlb newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Rminstzlb newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Rminstzlb query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Rminstzlb whereCalltypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Rminstzlb whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Rminstzlb whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Rminstzlb whereRminst($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Rminstzlb whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Rminstzlb whereZlb($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Rminstzlb whereZlbCreatedAt($value)
 * @mixin \Eloquent
 */
class Rminstzlb extends Eloquent
{
	protected $table = 'rminstzlb';

	protected $casts = [
		'rminst' => 'int',
		'zlb' => 'int',
		'calltype_id' => 'int'
	];

	protected $dates = [
		'zlb_created_at'
	];
}
