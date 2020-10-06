<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    //
    protected $table = 'complaints';
    protected $fillable =[

       'complaint_id',
       'complaint',
       'customer_name',
       'assigned',

       'status',
       'complaint_status',


    ];
}
