<?php

namespace App\Http\Controllers\OfficeStaff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Softon\Indipay\Facades\Indipay;
use App\CustomerPackage;

class GatewayController extends Controller
{
    //

      public function gateway(Request $request, $id)
    {   
         //dd($request->all());
         $cus_pack =CustomerPackage::find($id);
    	//dd($cus_pack);
    	//dd($request->all());

          // $cus_pack->customer_paid_amount =$request->amount;
          // $cus_pack->package_total_amount =$request->package_total_amount;
          // $cus_pack->update();
          //dd($cus_pack);


    	  
    	   // amount
    	   // productinfo	
    	   // firstname	
    	   // email
    	   // phone

    	//return view('admin.payment_gateway.index');


    	  $parameters = [
        // 'transaction_no' => '1233221223322',
        'amount' => $request->amount,
        'productinfo'=>$id,


        'firstname' => $request->firstname,
        'email' => $request->email,
        'phone'=> $request->phone,
      ];

      $order = Indipay::prepare($parameters);
      return Indipay::process($order);
      
    }

    public function response(Request $request)
    {   
    	dd($request->all());

    	$response =Indipay::response($request);
    	dd($response);
    }
}
