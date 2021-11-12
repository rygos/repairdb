<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Changelog extends Model
{
    protected $dateFormat = 'd-m-Y H:i:s';
    protected $table = 'changelog';
    protected $fillable = [
        'version_id',
        'type',
        'description'
    ];
}
