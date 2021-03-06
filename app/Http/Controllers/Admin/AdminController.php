<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Customer;
use App\Enquiery;
use App\CustomerPackage;
use App\Complaint;
use App\PaymentDiscount;
use App\Agentnotifications;

class AdminController extends Controller
{
    //
    public function index()
    {   
    	// $user =User::get()->where('user_delete_status',1)->count();
    	// dd($user);
        $cust =Customer::select("*")
                        ->where('customer_status',1)
                        ->orderBy("id", "desc")
                        ->limit(8)
                        ->get();
  
          //dd($cust); 
       


    	$customer = Customer::get()->where('customer_status',1)->count();
    	//dd($customer);
    	$enquiery = Enquiery::get()->where('enquiery_status',1)->where('status',0)->count();
    	//dd($enquiery);

    	$pending_payments = CustomerPackage::get()->where('customer_package_status',1)->where('payment_status',0)->count();
    	//dd($pending_payments);

    	$completed_payments = CustomerPackage::get()->where('customer_package_status',1)->where('payment_status',1)->count();

        $complaint = Complaint::get()->where('complaint_status',1)->where('status',0)->count();
        //dd($complaint);


         $agent_notification = Agentnotifications::get()->where('agentnotification_status',1)->count();

          $invoice = PaymentDiscount::get()->where('customer_discount_package_status',1)->count();

         


       return view('admin.home')->with('customer',$customer)->with('enquiery',$enquiery)->with('pending_payments',$pending_payments)->with('completed_payments',$completed_payments)->with('cust',$cust)->with('complaint',$complaint)->with('agent_notification',$agent_notification)->with('invoice',$invoice);
    }
}
