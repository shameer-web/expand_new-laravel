<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Channel extends Model
{
    //

    protected $fillable = [
       'channel_name','channel_type','channel_duration','channel_price','cgst','sgst','cess','total_tax','gst','channel_amount','total_amount','channel_status'
    ];
}
