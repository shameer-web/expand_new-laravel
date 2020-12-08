<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerChannel extends Model
{
    //

     protected $fillable = [
       'channel_name','channel_amount','channel_total_amount','cus_id','channel_status','payment_status','	transaction_type','paid_amount','balance','gst_number','payment_date','customer_channel_status'
    ];

    public function channel(){
    return $this->belongsTo(Channel::class,'channel_name','id');
   }

   public function cus(){
    return $this->belongsTo(Customer::class,'cus_id','id');
   }
}
