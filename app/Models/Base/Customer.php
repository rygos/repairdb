<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 21 Mar 2019 08:34:40 +0000.
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
 *
 * @package App\Models\Base
 */
class Customer extends Eloquent
{

}
