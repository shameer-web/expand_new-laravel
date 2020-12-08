<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EnquiryHistory extends Model
{
    //

    protected $fillable = [
       
            'staff',
            'customer_name',
            'remarks',
            'enquiry_history_status'
           
    ];
}
