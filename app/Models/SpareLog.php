<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Spare
 *
 * @property int $id
 * @property int $user_id
 * @property string $description
 * @property int $status
 * @property int $spare_to_repairs_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Spare whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Spare whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Spare whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Spare whereSpareToRepairsId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Spare whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Spare whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Spare whereUpdatedAt($value)
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Spare newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Spare newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Spare query()
 */

class SpareLog extends Model
{
    use HasFactory;
    protected $table = 'spare_log';
    protected $fillable = [
        'spare_to_repairs_id',
        'user_id',
        'status',
        'description',
    ];
}
