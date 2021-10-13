<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 12 Sep 2018 12:59:11 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Rminstzlb
 *
 * @property int $id
 * @property int $rminst
 * @property int $zlb
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Rminstzlb whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Rminstzlb whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Rminstzlb whereRminst($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Rminstzlb whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Rminstzlb whereZlb($value)
 * @mixin \Eloquent
 * @property int $calltype_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Rminstzlb whereCalltypeId($value)
 * @property string $zlb_created_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Rminstzlb whereZlbCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Rminstzlb newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Rminstzlb newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Rminstzlb query()
 */
class Rminstzlb extends Eloquent
{
	protected $table = 'rminstzlb';
    protected $dateFormat = 'd-m-Y H:i:s.v';

	protected $casts = [
		'rminst' => 'int',
		'zlb' => 'int',
        'calltype_id' => 'int'
	];

	protected $fillable = [
		'rminst',
		'zlb',
        'calltype_id',
        'zlb_created_at',
	];

    protected $dates = [
        'zlb_created_at'
    ];

    public function calltype(){
        return $this->hasOne('App\Models\CallType', 'id', 'calltype_id')->first();
    }
}
