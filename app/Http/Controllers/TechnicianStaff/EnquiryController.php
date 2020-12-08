<?php

namespace App\Http\Controllers\TechnicianStaff;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\User;
use App\Enquiery;
use App\EnquiryHistory;

use Auth;
use DB;

class EnquiryController extends Controller
{
    //

      public function index()
    {
        // 

           $tech = Auth::user()->id;
           //dd($tech);

            $user =User::where('user_delete_status', 1)->where('role',3)->get();
           
             $data =Enquiery::where('enquiery_status', 1)->where('assign_to',$tech)->get();
            //dd($data);


             return view('technician-staff.enquiery.index')->with('data',$data)->with('user',$user);
    }


     public function create()
    {
        //

        $data =User::where('user_delete_status', 1)->get();
        $page_data['data']=$data;
       // $page_data['title']="Create Vendor";
        //$page_data['role']=3;

        return view('technician-staff.enquiery.create',compact('page_data'));
       
    }



     public function store(Request $request)
    {   
        //dd($request->all());
        $invoice_prefix="ENQ-N";
        // $invoice = Enquiery::select('id', 'enqid')->orderBy('id', 'desc')->first();
        $invoice = Enquiery::orderBy('id', 'desc')->first();
        
        if($invoice){
            $previous_invoice_no = $invoice->enqid;
            $unique_id = substr($previous_invoice_no, 5);
            $new_no = (int)$unique_id+1;
        }else{
            $new_no = 0001; // Starting No When No Data is Present
        }

        
        $test= $invoice_prefix.str_pad($new_no, 4, '0', STR_PAD_LEFT);
        
        $enquiery = new Enquiery();
        $enquiery->enqid = $test;
        $enquiery->full_name = $request->full_name;
        $enquiery->contact_number = $request->contact_number;
        $enquiery->address = $request->address;
        $enquiery->postcode = $request->postcode;
        $enquiery->state = $request->state;
        $enquiery->assign_to = '0';
        $enquiery->date = $request->date;
        // dd($enquiery);
        $enquiery->save();

        return redirect()->route('enq.index')->with('message','succesfully created your field');

    }


    public function edit($id)
    {
        
        

        $enquiery =Enquiery::find($id);

        $assign_to = $enquiery->assign_to;
       
        $page_data['assign_to'] =  $assign_to;
        $page_data['enquiery'] = $enquiery;
       // $data=User::all();
        // $data =User::where('user_delete_status', 1)->get();
        $data =User::where('user_delete_status', 1)->where('role', '!=' , 1)->get();
        $page_data['data'] = $data;

        return view('technician-staff.enquiery.edit', compact('page_data'));
    }



    public function update(Request $request, $id)
    {   

    	//dd($id);
        // dd($request->all());




          $enquiery=Enquiery::find($id);



            $staff =$enquiery->assign_to;
            $customer_name =$enquiery->full_name;


         $enq_history =new EnquiryHistory();
            $enq_history->staff =$staff;
            $enq_history->customer_name =$customer_name;
            $enq_history->remarks =$request->remarks;
         $enq_history->save();
            
         //dd($enquiery);


              $data = DB::table('enquieries')
             ->select('enquieries.number_of_visit')
             ->where('id',$id)
             ->first();

            
             
            $number_of_visit =$data->number_of_visit;
             
              $previous_invoice_no =  $number_of_visit;
              //dd($previous_invoice_no+1);

            $unique_id = substr($previous_invoice_no, 5);
            $new_no = $previous_invoice_no+1;
            //dd($new_no);

             $test= str_pad($new_no, 2, '0', STR_PAD_LEFT);

            //dd($test);



            // dd($number_of_visit +.02);

            $enquiery->remarks =$request->remarks;
            $enquiery->number_of_visit =$test;

            $enquiery->update();



        // dd($request->all());
        //   $enquiery_update = $enquiery->update($request->toArray());
        // if ($enquiery_update) {

        //     if (isset($request->enquiery_status) and $request->enquiery_status == '0') {
        //         Session::flash('toasttype', 'success');
        //         Session::flash('toasttitle', 'Deleted');
        //         Session::flash('toastcontent', 'Enquiery  Details Deleted  Successfully');
        //     } else {

        //         Session::flash('toasttype', 'success');
        //         Session::flash('toasttitle', 'Success');
        //         Session::flash('toastcontent', 'Enquiery  Details updated Successfully');
        //     }
        // } else {
        //     Session::flash('toasttype', 'error');
        //     Session::flash('toasttitle', 'Error');
        //     Session::flash('toastcontent', 'Enquiery  Details Not Updated');
        // }

       
        
       
        return redirect()->route('enq.index');
    }
}
