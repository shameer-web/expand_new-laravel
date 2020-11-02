<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    //

     protected $table ='payments';
       protected $fillable = [
       
       'cus_id',
       'payment_amount',
       'delete_status'
    ];
}
