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
       'post_no',
       'type',
       'complaint',
       'other_complaint',
       'active_deactive',
       'active_deactive_date',
       'assigned',
       'remarks',


       'status',
       'complaint_description',
       'technician_status',
       'complaint_status',


    ];

    protected $casts = [
      'complaint' => 'array'
    ];


  

    public function assingned(){
    return $this->belongsTo(User::class,'assigned','id');
   }

    public function subcode(){
    return $this->belongsTo(Subcode::class,'sub_code','id');
   }

    public function tech_status(){
    return $this->belongsTo(Technicianstatus::class,'technician_status','id');
   }
   public function cus(){
    return $this->belongsTo(Customer::class,'customer_name','id');
   }
}
