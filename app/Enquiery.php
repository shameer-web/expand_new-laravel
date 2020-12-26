<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enquiery extends Model
{
    //


    protected $fillable = [
       'full_name','contact_number','address','postcode','state','remarks','number_of_visit','status','assign_to','assist_by','assign_status','date','enquiery_status'
    ];

     public function User(){
    return $this->belongsTo(User::class,'assign_to','id');
   }


     public function staff(){
    return $this->belongsTo(User::class,'assist_by','id');
   }


    // protected $casts = [
    //   'assign_to' => 'array',
    //   // 'complainttype' => 'array'
    // ];
}
