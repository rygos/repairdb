<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 19 Aug 2020 07:55:25 +0000.
 */

namespace App\Models\Base;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Gsxspare
 * 
 * @property int $id
 * @property string $productname
 * @property string $part
 * @property string $partdesc
 * @property string $parttype
 * @property string $option
 * @property float $price
 * @property string $eee
 * @property string $sparepart
 * @property string $withsn
 * @property string $withdiag
 *
 * @package App\Models\Base
 */
class Gsxspare extends Eloquent
{
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'price' => 'float'
	];
}
