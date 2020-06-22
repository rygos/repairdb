<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 22 Jun 2020 11:33:29 +0000.
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
