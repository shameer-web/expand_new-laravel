<?php

namespace App\Http\Controllers\OfficeStaff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Complaint;
use App\User;
use App\Customer;
use App\Complainttype;

class ComplaintController extends Controller
{
    //


    public function index(){
       

         $page_data = [];

         //may be 

    $complaint =Complaint::where('complaint_status', 1)->get();

     foreach ($complaint as $data) {
         $data['complaint'] = Complainttype::whereIn('id',$data->complaint)->get();
         $value[]=$data; 
     }

     if(isset($value)){

      $page_data['value'] = $value;
     }

      $user= User::where('user_delete_status', 1)->where('role', 3)->get();
       $page_data['user'] = $user;

    return view('office-staff.complaint.index',compact('page_data'));




    }

    public function store(Request $request)
    {
    	//dd($request->all());
        

        $invoice_prefix="CMPLT";
        $invoice = Complaint::select('id', 'complaint_id')->orderBy('id', 'desc')->first();
       
        if($invoice){
            $previous_invoice_no = $invoice->complaint_id;
            $unique_id = substr($previous_invoice_no, 5);

            $new_no = ++$unique_id;
             
        }else{
            $new_no = "-N0001"; // Starting No When No Data is Present
        }
        
        $test= $invoice_prefix.str_pad($new_no, 4, '0', STR_PAD_LEFT);
      


    	$complaint = new Complaint();
    	//$complaint->complaint_id =$request->complaint_id;
         $complaint->complaint_id = $test;
       
    	
    	$complaint->customer_name =$request->customer_name;
      $complaint->phone_no =$request->phone_no;
      $complaint->email =$request->email;
      $complaint->staff =$request->staff;
      $complaint->post_no =$request->post_no;


        $complaint->complaint =$request->complaint;
        // $complaint->complaint = json_encode($request->complaint);
         $complaint->other_complaint =$request->other_complaint;

    	$complaint->save();

    	 return redirect()->route('complaints.index')->with('message','succesfully created your field');
    }


    public function create(){
      
       $user =User::where('user_delete_status', 1)->get();
        $customer =Customer::where('customer_status', 1)->get();
         $complainttype =Complainttype::where('complainttype_status', 1)->get();

    	return view('office-staff.complaint.create')->with('user',$user)->with('customer',$customer)->with('complainttype',$complainttype);
    }

    public function edit($id){

          // return "hiiii";

         $complaint =Complaint::find($id);


          $user =User::where('user_delete_status', 1)->get();
          $customer =Customer::where('customer_status', 1)->get();
          $complainttype =Complainttype::where('complainttype_status', 1)->get();

    	  $page_data['complaint'] = $complaint;
          $page_data['user'] = $user;
          $page_data['customer'] = $customer;
          $page_data['complainttype'] = $complainttype;





       
      
       
      
       // $data=User::all();

        return view('office-staff.complaint.edit',compact('page_data'));



       

      
    }


    public function update(Request $request ,$id){

      //dd($request->all());
    	 $complaint=Complaint::find($id);
        // dd($request->all());
          $complaint_update = $complaint->update($request->toArray());
        if ($complaint_update) {

            if (isset($request->complaint_status) and $request->complaint_status == '0') {
                Session::flash('toasttype', 'success');
                Session::flash('toasttitle', 'Deleted');
                Session::flash('toastcontent', 'complaint  Details Deleted  Successfully');
            } else {

                Session::flash('toasttype', 'success');
                Session::flash('toasttitle', 'Success');
                Session::flash('toastcontent', 'complaint  Details updated Successfully');
            }
        } else {
            Session::flash('toasttype', 'error');
            Session::flash('toasttitle', 'Error');
            Session::flash('toastcontent', 'complaint  Details Not Updated');
        }

       
        
       
        return redirect()->route('complaints.index');

    }
}
