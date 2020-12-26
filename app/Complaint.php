<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    //
    protected $table = 'complaints';
    protected $fillable =[

       'complaint_id',
       'customer_id',
       'customer_name',
       'phone_no',
       'email',
       'staff',
       'assist_by',
       'number_of_visit',
       'post_no',
       'type',
       'complaint',
       'other_complaint',
       'active_deactive',
       'active_deactive_date',
       'payment_due',
       'customer_request',
       'assigned',
       'remarks',
       'priority',


       'status',
       'complaint_description',
       'technician_status',
       'complaint_status',
       'active_deactive_status',


    ];

    protected $casts = [
      'complaint' => 'array',
      // 'complainttype' => 'array'
    ];

  
    public function staffs(){
    return $this->belongsTo(User::class,'staff','id');
   }

    public function assist(){
    return $this->belongsTo(User::class,'assist_by','id');
   }


   public function customer(){
    return $this->belongsTo(Customer::class,'customer_name','id');
   }

    public function assingned(){
    return $this->belongsTo(User::class,'assigned','id');
   }

    public function subcode(){
    return $this->belongsTo(Subcode::class,'sub_code','id');
   }

    public function tech_status(){
    return $this->belongsTo(Technicianstatus::class,'technician_status','id');
   }

   public function user(){

     return $this->belongsTo(User::class,'staff','id');
   }
   
}
