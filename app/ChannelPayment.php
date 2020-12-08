<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChannelPayment extends Model
{
    //



     protected $table ='channel_payments';
       protected $fillable = [
       
       'cus_id',
       'channel_name',
       'channel_type',
       'transaction_type',
       'channel_amount',
       'channel_total_amount',
       'due_amount',
       'balance',
       'total_channel_amount',
       'customer_paid_amount',
       'gst_number',
       'payment_date',
      
      
       'delete_status'
    ];
}
