<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agentnotifications extends Model
{
    //
      protected $fillable =[
        'cust_id',
        'agent_name',
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
        'agentnotification_status',

         ];


          public function Area(){
          return $this->belongsTo(Area::class,'area','id');
          }

           public function Subcode(){
          return $this->belongsTo(Subcode::class,'sub_code','id');
           }

            public function District(){
          return $this->belongsTo(District::class,'district','id');
           }

            public function District1(){
          return $this->belongsTo(District::class,'district1','id');
           }


}
