<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    //

     protected $fillable = [
       'package_name','package_type','package_duration','package_price','cgst','sgst','cess','total_tax','gst','package_amount','total_amount','package_status'
    ];
}
