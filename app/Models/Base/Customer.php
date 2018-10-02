<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 02 Oct 2018 06:53:48 +0000.
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
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Customer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Customer whereCustomer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Customer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Customer whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Customer extends Eloquent
{

}
