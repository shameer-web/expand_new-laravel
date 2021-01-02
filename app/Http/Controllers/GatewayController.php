<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Softon\Indipay\Facades\Indipay;
use App\CustomerPackage;


class GatewayController extends Controller
{
    //



   
    public function response(Request $request)
    {   
    	//dd($request->all());
    	//dd($request->status);
    	//dd($request->productinfo);


    	if($request->status == "success")
    	{
    		//return "hiii";
    		//dd($request->productinfo);
    		$id =$request->productinfo;

    		 $cus_pack =CustomerPackage::find($id);
    		 //dd($cus_pack);

    		  $balance = $request->amount - $request->amount;
    		 // dd($balance);


    	  $cus_pack->customer_paid_amount =$request->amount;
          $cus_pack->balance =$balance;
          $cus_pack->payment_status =1;
          $cus_pack->package_status =1;
          $cus_pack->update();
    		 // dd($request->amount);
          // return "hiii";


          $response =Indipay::response($request);
    	//dd($response);
    	return redirect()->route('indipay.index')->with('success',"Payment Successfully Done");
    	}

    	else{

    		//return "hello";

    		$response =Indipay::response($request);
    	    //dd($response);
    	    return redirect()->route('indipay.index')->with('failure',"Payment Failed");

    	}





    	

    }


    public function index(){

        return view('welcome');
    }

}
