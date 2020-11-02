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
       'status',
       'cus_device_status',
       'device_id'
    ];

    public function District(){
    return $this->belongsTo(District::class,'district','id');
   }

    public function Type(){
    return $this->belongsTo(Type::class,'type','id');
   }
    public function Mode(){
    return $this->belongsTo(Mode::class,'model','id');
   }

     public function Loc(){
    return $this->belongsTo(Loc::class,'lco_id','id');
   }

    public function Company(){
    return $this->belongsTo(Company::class,'device','id');
   }

   public function Customer(){
    return $this->belongsTo(Customer::class,'status','id');
   }


   

}
