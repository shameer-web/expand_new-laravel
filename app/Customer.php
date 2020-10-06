<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Area;

class Customer extends Model
{
    //
    
     protected $table ='customers';
    protected $fillable = [

    	
    	'name',			
        'sub_code',		
        'area',
        'customer_id',		
        'crf_no',			
        'kseb_post_no',		
        'installation_address',	
        'district',			
        'pin_code',		
        'communication_address',
        'customer_type',	
        'id_proof_type',	
        'proof',	
        'phone',		
        'mobile_number',	
        'email',		
        'remark',
        'date',
        'customer_status',
        'enqid'		

    ];

    //belong to relationship
   public function Area(){
    return $this->belongsTo(Area::class,'area','id');
   }

}
