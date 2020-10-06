<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gst extends Model
{
    //

    protected $fillable =[

       'gst',
       'cgst',
       'sgst',
       'cess',
       'gst_status',
    ];
}
