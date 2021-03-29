<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KvaFiles extends Model
{
    protected $fillable = [
        'name',
        'file_path',
        'repair_id'
    ];
}
