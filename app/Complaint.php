<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    //
    protected $table = 'complaints';
    protected $fillable =[

       'complaint_id',
       'customer_name',
       'phone_no',
       'email',
       'staff',
       'complaint',
       'other_complaint',
       'assigned',

       'status',
       'complaint_status',


    ];

    protected $casts = [
      'complaint' => 'array'
    ];


    public function customer(){
    return $this->belongsTo(Customer::class,'customer_name','id');
   }

    public function staff(){
    return $this->belongsTo(User::class,'staff','id');
   }
}
