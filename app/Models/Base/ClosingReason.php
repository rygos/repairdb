<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 23 Jun 2020 15:36:57 +0000.
 */

namespace App\Models\Base;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ClosingReason
 * 
 * @property int $id
 * @property string $reason
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models\Base
 */
class ClosingReason extends Eloquent
{
	protected $table = 'closing_reason';
}
