<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerPackage extends Model
{
    //


     protected $fillable = [
       'package_name',
       'package_amount',
       'package_total_amount',
       'cus_id',
       'package_status',
       'payment_status',
       'transaction_type',
       'customer_paid_amount',
       'extra_days_amount',
       'due_amount',
       'balance',
       'discount',
       'gst_number',
       'payment_date',
       'customer_package_status',
       'deactivation_date',
    ];

    public function package(){
    return $this->belongsTo(Package::class,'package_name','id');
   }

   public function cus(){
    return $this->belongsTo(Customer::class,'cus_id','id');
   }


}
