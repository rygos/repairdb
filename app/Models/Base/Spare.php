<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 16 Nov 2018 08:37:16 +0000.
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
 * @package App\Models\Base
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Spare whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Spare whereCustomerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Spare whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Spare whereManufacturerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Spare whereManufacturerPartDesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Spare whereManufacturerPartNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Spare whereManufacturerRemarks($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Spare whereModelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Spare wherePriceReplace($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Spare wherePriceReplaceDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Spare wherePriceStock($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Spare wherePriceStockDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Spare whereSapDesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Spare whereSapNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Spare whereUpdatedAt($value)
 * @mixin \Eloquent
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
