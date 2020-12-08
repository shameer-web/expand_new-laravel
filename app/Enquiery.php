<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enquiery extends Model
{
    //

    protected $fillable = [
       'full_name','contact_number','address','postcode','state','remarks','number_of_visit','status','assign_to','date','enquiery_status'
    ];

     public function User(){
    return $this->belongsTo(User::class,'assign_to','id');
   }


    // protected $casts = [
    //   'assign_to' => 'array',
    //   // 'complainttype' => 'array'
    // ];
}
