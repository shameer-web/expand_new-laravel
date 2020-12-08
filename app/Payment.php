<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    //

     protected $table ='payments';
       protected $fillable = [
       
       'cus_id',
       'package_name',
       'package_type',
       'transaction_type',
       'package_amount',
       'package_total_amount',
       'due_amount',
       'balance',
       'total_package_amount',
       'customer_paid_amount',
       'extra_days_amount',
       'gst_number',
       'payment_date',
      
      
       'delete_status'
    ];


    public function payment(){
    return $this->belongsTo(Package::class,'package_name','id');
   }
}
