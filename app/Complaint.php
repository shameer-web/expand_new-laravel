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
       'complaint',
       'other_complaint',
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
}
