<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChangelogVersion extends Model
{
    //protected $dateFormat = 'd-m-Y H:i:s';
    protected $fillable = [
        'version',
        'description',
        'published',
        'published_at'
    ];

    public function changelog(){
        $this->hasMany('App\Models\Changelog', 'version_id', 'id');
    }
}
