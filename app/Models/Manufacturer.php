<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 12 Sep 2018 12:59:11 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Manufacturer
 *
 * @property int $id
 * @property string $manufacturer
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Manufacturer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Manufacturer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Manufacturer whereManufacturer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Manufacturer whereUpdatedAt($value)
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Manufacturer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Manufacturer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Manufacturer query()
 */
class Manufacturer extends Eloquent
{
	protected $table = 'manufacturer';
    protected $dateFormat = 'd-m-Y H:i:s';
	protected $fillable = [
		'manufacturer'
	];
}
