<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerPackage extends Model
{
    //


     protected $fillable = [
       'package_name','package_amount','cus_id','package_status','payment_status','payment_date','customer_package_status'
    ];

    public function package(){
    return $this->belongsTo(Package::class,'package_name','id');
   }
}
