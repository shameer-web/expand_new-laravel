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
       'assign_to',
       'device_status',
       'device_name'
    ];


    public function user(){
    return $this->belongsTo(User::class,'assign_to','id');
   }

    public function district(){
    return $this->belongsTo(District::class,'district','id');
   }

}
