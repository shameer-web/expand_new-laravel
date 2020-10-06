<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    //

     protected $fillable = [
       'package_name','package_type','package_price','gst','package_amount','total_amount','package_status'
    ];
}
