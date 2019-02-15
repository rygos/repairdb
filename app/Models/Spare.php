<?php

namespace App\Models;

/**
 * App\Models\Spare
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
 * @property \Illuminate\Support\Carbon $price_replace_date
 * @property \Illuminate\Support\Carbon $price_stock_date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Spare whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Spare whereCustomerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Spare whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Spare whereManufacturerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Spare whereManufacturerPartDesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Spare whereManufacturerPartNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Spare whereManufacturerRemarks($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Spare whereModelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Spare wherePriceReplace($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Spare wherePriceReplaceDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Spare wherePriceStock($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Spare wherePriceStockDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Spare whereSapDesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Spare whereSapNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Spare whereUpdatedAt($value)
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Spare newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Spare newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Spare query()
 */
class Spare extends \App\Models\Base\Spare
{
	protected $fillable = [
		'sap_no',
		'sap_desc',
		'manufacturer_id',
		'model_id',
		'customer_id',
		'manufacturer_part_no',
		'manufacturer_part_desc',
		'manufacturer_remarks',
		'price_replace',
		'price_stock',
		'price_replace_date',
		'price_stock_date'
	];
}
