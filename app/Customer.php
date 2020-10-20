<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //

     protected $table ='customers';
    protected $fillable = [

    	'cust_id',
    	'enqid',
    	'name',			
        'sub_code',		
        'area',
        		
        'crf_no',			
        'kseb_post_no',		
        'installation_address',	
        'district',			
        'pin_code',		
        'communication_address',
        'district1',			
        'pin_code1',

        'customer_type',	
        'id_proof_type',
        'id_proof_number',
        'phone',		
        'mobile_number',	
        'email',
        'date',		
        'remark',
         // 'proof',
        'customer_status',

        		

    ];


      //belong to relationship
   public function Area(){
    return $this->belongsTo(Area::class,'area','id');
   }
}
