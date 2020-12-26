<?php

namespace App\Http\Controllers\CollectionAgent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Customer;
use App\CustomerPackage;
use App\Payment;
use App\InvoiceImage;
use Carbon;

class InvoiceController extends Controller
{
   

     public function index(){

    }
    public function create()
    {
      $customer =Customer::where('customer_status', 1)->get();
      return view('collection-agent.invoice.create')->with('customer',$customer);
    }


    public function invoice_reg(Request $request)
    {
      //dd($request->all());
      $cust_id =$request->cust_id;
      //dd($cust_id);

      $cust_package =CustomerPackage::where('cus_id',$cust_id)->orderBy("id", "desc")->first();
      //dd($cust_package);
       // dd($cust_package->payment_date);
      //dd($cust_package->package_amount);
        if($cust_package ==null)
        {
         $due_amount = null;
         $total_amount =null;
        }

        else{

         $final =$cust_package->payment_date;
         $final1 =Carbon\Carbon::now();
         //dd($final1);

          $formatted_dt1=Carbon\Carbon::parse($final);
         // dd($formatted_dt1);

        $formatted_dt2=Carbon\Carbon::parse($final1);

         $date_diff=$formatted_dt1->diffInMonths($formatted_dt2);
         //dd($date_diff);

          if($date_diff == 0){
           $amout = $cust_package->package_total_amount;
        }
        else{
         $amout = $date_diff * $cust_package->package_total_amount;
         
       }
       //dd($amout);
       $due_amount = $amout ;
      // dd($due_amount);

       $total_amount = $amout + $cust_package->balance;

       //dd($total_amount);

       }


        $invoice_img1=InvoiceImage::where('invoice_image_status',1)->first();
      // dd($invoice_img1);
       $invoice_img2=InvoiceImage::where('invoice_image_status',1) ->orderBy("id", "desc")->first();
     // dd($invoice_img2);

       $billdate = Carbon\Carbon::now();
      // dd($billdate);



      return view('collection-agent.invoice.invoice')->with('cust_package',$cust_package)->with('due_amount',$due_amount)->with('total_amount',$total_amount)->with('invoice_img1',$invoice_img1)->with('invoice_img2',$invoice_img2)->with('billdate',$billdate);


    }

   
    public function update_package(Request $request ,$id){



       // dd($request->all());

         
         $pay = new Payment();
          $pay->cus_id =$request->cus_id;
          $pay->transaction_type =$request->transaction_type;
          $pay->package_amount =$request->package_amount;
          
          $pay->package_total_amount =$request->package_total_amount;

          $pay->due_amount =$request->due_amount;
          $pay->balance =$request->balance;
          $pay->total_package_amount =$request->total_package_amount;
          $pay->customer_paid_amount=$request->customer_paid_amount; 
          $pay->gst_number=$request->gst_number;
          $pay->payment_date=$request->payment_date;
         

          //dd($amout);
          $pay->save();





           //dd($id);
        $cus_package =CustomerPackage::find($id);
        //dd($cus_package);
       
        $balance = $request->total_package_amount - $request->customer_paid_amount;
//dd($balance);

        // $cus_package->package_amount = $request->package_total_amount;

        $next=$request->package_total_amount;

        
        $cus_package->package_total_amount =$next;

        $cus_package->transaction_type =$request->transaction_type;
        $cus_package->customer_paid_amount = $request->customer_paid_amount;
        $cus_package->balance =$balance;
        $cus_package->gst_number = $request->gst_number;
        $cus_package->payment_date = $request->payment_date;
        $cus_package->payment_status =1;
        $cus_package->package_status =1;
        $cus_package->update();

        $cust_package =CustomerPackage::where('id',$id)->orderBy("id", "desc")->first();
        //dd($cust_package);


           if($cust_package ==null)
        {
         $due_amount = null;
         $total_amount =null;
        }

        else{

         $final =$cust_package->payment_date;
         $final1 =Carbon\Carbon::now();
         //dd($final1);

          $formatted_dt1=Carbon\Carbon::parse($final);
         // dd($formatted_dt1);

        $formatted_dt2=Carbon\Carbon::parse($final1);

         $date_diff=$formatted_dt1->diffInMonths($formatted_dt2);
         //dd($date_diff);

          if($date_diff == 0){
           $amout = $cust_package->package_total_amount;
        }
        else{
         $amout = $date_diff * $cust_package->package_total_amount;
         
       }
       //dd($amout);
       $due_amount = $amout ;
      // dd($due_amount);
       
       

       $total_amount = $amout + $cust_package->balance;

       //dd($total_amount);

       }


       $invoice_img1=InvoiceImage::where('invoice_image_status',1)->first();
       //dd($invoice_img1->header);
       $invoice_img2=InvoiceImage::where('invoice_image_status',1) ->orderBy("id", "desc")->first();
     // dd($invoice_img2);

         $billdate = Carbon\Carbon::now();
       //dd($billdate);


      return view('admin.invoice.invoice')->with('cust_package',$cust_package)->with('due_amount',$due_amount)->with('total_amount',$total_amount)->with('invoice_img1',$invoice_img1)->with('invoice_img2',$invoice_img2)->with('billdate',$billdate);

       

    // $startTime = Carbon::parse($cus_package ->payment_date);
    // //dd($startTime);
    // $endTime = Carbon::now();
    // //dd($endTime);

    // $totalDuration = $endTime->diffForHumans($startTime);
    // dd($totalDuration);


    $time = strtotime($cus_package->payment_date);
         //dd($time);
         $final =$cus_package->payment_date;
         //dd($final);
         $final1 = Carbon::now();
        


         $formatted_dt1=Carbon::parse($final);
         // dd($formatted_dt1);

        $formatted_dt2=Carbon::parse($final1);
        //dd($formatted_dt2);

        $date_diff=$formatted_dt1->diffInMonths($formatted_dt2);
        //dd($date_diff);
        if($date_diff == 0){
           $amout = $request->package_amount;
        }
        else{
         $amout = $date_diff * $request->package_amount;
         
       }
       //dd($amout);


       



 

       


          $pay = new Payment();
          $pay->cus_id =$request->cus_id;
          $pay->payment_amount = $amout;

          //dd($amout);
          $pay->save();


        $pack_update =CustomerPackage::find($id);
        $pack_update->package_amount =$request->package_amount;
        $pack_update->payment_status =1;
        $pack_update->package_status =1;

            $mytime =Carbon::now();
            $abc =$mytime->toDateTimeString();
            $pack_update->payment_date = $abc;
            $pack_update->update();
         return redirect()->back();    




        

    }

}
