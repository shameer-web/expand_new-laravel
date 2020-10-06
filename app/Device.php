<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    //

    protected $fillable = [
       'device',
       'type',
       'device_id',
       'serial_number',
       'model',
       'district',
       'lco_id',
       'device_status',
       'device_name'
    ];
}
