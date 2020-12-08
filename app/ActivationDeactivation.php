<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActivationDeactivation extends Model
{
    //


    protected $table = 'activation_deactivations';
    protected $fillable =[

       'customer_name',
       'staff',
       'complaint',
       'type',
       'other_complaint',
       'active_deactive',
       'active_deactive_date',
       'payment_due',
       'customer_request',

       'status',
       'activation_deactivation_status',


    ];

}
