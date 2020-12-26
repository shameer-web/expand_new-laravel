<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EnquiryHistory extends Model
{
    //

    protected $fillable = [
            'enq_id',
            'staff',
            'customer_name',
            'remarks',
            'enquiry_history_status'
           
    ];


      public function User(){
    return $this->belongsTo(User::class,'staff','id');
   }
}
