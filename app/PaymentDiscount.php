<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentDiscount extends Model
{
    //



     protected $fillable = [
       'staff_name',
       'package_amount',
       'package_total_amount',
        'cus_pack_id',
       'cus_id',
       // 'package_status',
       // 'payment_status',
       // 'transaction_type',
       // 'customer_paid_amount',
       // 'extra_days_amount',
       // 'due_amount',
       'balance',
       'discount',
       // 'gst_number',
       // 'payment_date',
       'customer_discount_package_status',
       // 'deactivation_date',
    ];
}
