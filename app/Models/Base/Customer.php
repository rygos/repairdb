<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 14 Feb 2019 12:57:06 +0000.
 */

namespace App\Models\Base;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Customer
 *
 * @property int $id
 * @property string $customer
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @package App\Models\Base
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Customer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Customer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Customer query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Customer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Customer whereCustomer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Customer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Customer whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Customer extends Eloquent
{

}
