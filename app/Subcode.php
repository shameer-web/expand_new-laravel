<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcode extends Model
{
    //

      protected $table ='subcodes';
       protected $fillable = [
       
       'subcode',
       'subcode_status'
    ];
}
