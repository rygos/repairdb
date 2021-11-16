<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DOA extends Model
{
    use HasFactory;
    protected $table = 'doa';
    //protected $dateFormat = 'd-m-Y H:i:s';
    protected $fillable = [
        'sap_no',
        'serial',
        'doa_description',
        'service_order',
        'user_id'
    ];
}
