<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enquiery extends Model
{
    //

    protected $fillable = [
       'full_name','contact_number','address','postcode','state','assign_to','enquiery_status'
    ];
}
