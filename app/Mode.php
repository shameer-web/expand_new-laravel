<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mode extends Model
{
    //
       protected $table ='modes';
       protected $fillable = [
       
       'model_name',
       'model_status'
    ];
}
