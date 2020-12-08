<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Complainttype extends Model
{
    //

     protected $table ='complainttypes';
       protected $fillable = [
       
       'complainttype',
       'complainttype_status'
    ];
    //  protected $casts = [
    //   'complainttype' => 'array'
    // ];
}
