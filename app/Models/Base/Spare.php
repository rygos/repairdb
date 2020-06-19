<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 19 Jun 2020 07:58:41 +0000.
 */

namespace App\Models\Base;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Spare
 * 
 * @property int $id
 * @property int $sap_no
 * @property string $sap_desc
 * @property int $manufacturer_id
 * @property int $model_id
 * @property int $customer_id
 * @property string $manufacturer_part_no
 * @property string $manufacturer_part_desc
 * @property string $manufacturer_remarks
 * @property float $price_replace
 * @property float $price_stock
 * @property \Carbon\Carbon $price_replace_date
 * @property \Carbon\Carbon $price_stock_date
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models\Base
 */
class Spare extends Eloquent
{
	protected $casts = [
		'sap_no' => 'int',
		'manufacturer_id' => 'int',
		'model_id' => 'int',
		'customer_id' => 'int',
		'price_replace' => 'float',
		'price_stock' => 'float'
	];

	protected $dates = [
		'price_replace_date',
		'price_stock_date'
	];
}
