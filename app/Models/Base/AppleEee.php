<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 14 Feb 2019 12:57:06 +0000.
 */

namespace App\Models\Base;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class AppleEee
 *
 * @property int $id
 * @property int $spare_id
 * @property string $eee
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @package App\Models\Base
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\AppleEee newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\AppleEee newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\AppleEee query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\AppleEee whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\AppleEee whereEee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\AppleEee whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\AppleEee whereSpareId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\AppleEee whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class AppleEee extends Eloquent
{
	protected $table = 'apple_eee';

	protected $casts = [
		'spare_id' => 'int'
	];
}
