<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InvoiceImage extends Model
{
    //

    protected $table ='invoice_images';
       protected $fillable = [
       
       'header',
       'invoice_image',
       'invoice_image_status'
       
    ];
}
