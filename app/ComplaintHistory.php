<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ComplaintHistory extends Model
{
    //


     protected $fillable = [
            'complaint_id',
            'staff',
            'customer_id',
            'customer_name',
            'remarks',
            'complaint_history_status'
           
    ];


      public function User(){
    return $this->belongsTo(User::class,'staff','id');
   }
}
