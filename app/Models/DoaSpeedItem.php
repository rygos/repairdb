<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoaSpeedItem extends Model
{
    use HasFactory;
    protected $dateFormat = 'd-m-Y H:i:s';
    protected $fillable = [
        'sap_no',
        'sap_desc'
    ];
}
