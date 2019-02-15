<?php

namespace App\Models;

/**
 * App\Models\EeeeModel
 *
 * @property int $id
 * @property string $eeee
 * @property int $model_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EeeeModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EeeeModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EeeeModel query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EeeeModel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EeeeModel whereEeee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EeeeModel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EeeeModel whereModelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EeeeModel whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class EeeeModel extends \App\Models\Base\EeeeModel
{
	protected $fillable = [
		'eeee',
		'model_id'
	];

	public function model(){
	    return $this->hasOne('App\Models\Model', 'id', 'model_id')->first();
    }
}
