<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Complaint;
use App\User;
use App\Customer;
use App\Complainttype;
use App\CustomerPackage;
use App\Device;
use DB;

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

      $user= User::where('user_delete_status', 1)->get();
       $page_data['user'] = $user;

    return view('admin.complaint.index',compact('page_data'));




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
      $complaint->type =$request->type;


        $complaint->complaint =$request->complaint;
        // $complaint->complaint = json_encode($request->complaint);
         $complaint->other_complaint =$request->other_complaint;
         $complaint->active_deactive =$request->active_deactive;
         $complaint->active_deactive_date =$request->active_deactive_date;

      $complaint->save();

       return redirect()->route('complaint.index')->with('message','succesfully created your field');
    }


    public function create(){
      
     //   $user =User::where('user_delete_status', 1)->get();
     //    $customer =Customer::where('customer_status', 1)->get();
     //     $complainttype =Complainttype::where('complainttype_status', 1)->get();

      // return view('admin.complaint.create')->with('user',$user)->with('customer',$customer)->with('complainttype',$complainttype);

      return view('admin.complaint.search');
    }

   

    public function complaint_reg(Request $request)

    {  
        $request->validate([

        'search'=>'required',
         ]);

       $cus_id =$request->search;


         $exist_customer = Customer::where('id', '=', $cus_id)
                         ->where('customer_status', 1)
                         ->first();
                         //dd($exist_user);
            if($exist_customer == null){
              $message ="pls enter Valid Customer Id";
              //dd($message);
              return redirect()->back()->with('message',$message);
;
            }
            else{
           
    

      
      //dd($request->all());
       
        //dd($cus_id);
        $cust =Customer::find($cus_id);
        //dd($customer);


        $cust_package =CustomerPackage::where('cus_id',$cus_id)->first();
        //dd($cust_package);
       

        //dd($cust_device);
        //$user =User::where('user_delete_status', 1)->get();
         $user =User::where('user_delete_status', 1)->where('role', '!=' , 1)->get();
        $customer =Customer::where('customer_status', 1)->get();
        $complainttype =Complainttype::where('complainttype_status', 1)->get();


         $cust_device =Device::where('id',$cus_id)->first();
         //dd($cust_device);



     // $complaint =Complaint::where('complaint_status', 1)->first();
      //dd($complaint);

      $complaint= DB::table('complaints')
                 ->where('customer_name',$cus_id)
                 ->orderBy('id', 'desc')
                 ->first();
      //dd($complaint);
          if($complaint == null){
                   $abcd = '';
                  // dd($abcd);
                   $abc = json_decode($abcd);
                 //dd($abc);
                   $single_com = '';
            }
          else{
              $complaint= DB::table('complaints')
                 ->where('customer_name',$cus_id)
                 ->orderBy('id', 'desc')
                 ->first();
                 //dd($complaint);
        $abcd =$complaint->complaint;
       // dd($abcd);
         $abc = json_decode($abcd);
         //dd($abc);
        $single_com = Complainttype::whereIn('id',$abc)->get();
        //dd($single_com);
       
        }

      return view('admin.complaint.complaint_profile')->with('user',$user)->with('customer',$customer)->with('complainttype',$complainttype)->with('cust',$cust)->with('cust_package',$cust_package)->with('cust_device',$cust_device)->with('complaint',$complaint)->with('single_com',$single_com);
        }
       
    }




    public function edit($id){

          // return "hiiii";

         $complaint =Complaint::find($id);


          //$user =User::where('user_delete_status', 1)->get();
          $user =User::where('user_delete_status', 1)->where('role', '!=' , 1)->get();
          $customer =Customer::where('customer_status', 1)->get();
          $complainttype =Complainttype::where('complainttype_status', 1)->get();

        $page_data['complaint'] = $complaint;
          $page_data['user'] = $user;
          $page_data['customer'] = $customer;
          $page_data['complainttype'] = $complainttype;





       
      
       
      
       // $data=User::all();

        return view('admin.complaint.edit',compact('page_data'));



       

      
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

       
        
       
        return redirect()->route('complaint.index');

    }
}
