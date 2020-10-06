<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerPackage extends Model
{
    //


     protected $fillable = [
       'package_name','cus_id','customer_package_status'
    ];
}
