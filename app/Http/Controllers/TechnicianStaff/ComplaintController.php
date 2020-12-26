<?php

namespace App\Http\Controllers\TechnicianStaff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Complaint;
use App\User;
use App\Customer;
use App\Complainttype;
use App\Technicianstatus;
use App\ComplaintHistory;
use DB;
use Auth;

class ComplaintController extends Controller
{
    //


    public function index(){
       

         $page_data = [];

         //may be 
   
    $tech = Auth::user()->id;
    //dd($tech);

           
            // $complaint =Complaint::where('complaint_status', 1)->get();
            $status = Complaint::where('complaint_status', 1)->get();
          //  dd($status);

            foreach($status as $stat){
           // dd($stat->assign_to);
           



              $res = Complaint::where('complaint_status', 1);
        
        if ($stat->staff ==$tech ){
        $res->where('staff',$tech);
        $complaint = $res->get();
        }



        else{
              $res->where('assist_by',$tech);
              $complaint = $res->get();
        }
        }
       
       // dd($stat->assist_by);

      // dd($complaint);



    // $complaint =Complaint::where('complaint_status', 1)->get();

    



     foreach ($complaint as $data) {
         $data['complaint'] = Complainttype::whereIn('id',$data->complaint)->get();
         $value[]=$data; 
     }

     if(isset($value)){

      $page_data['value'] = $value;
     }

      $user= User::where('user_delete_status', 1)->where('role', 3)->get();
       $page_data['user'] = $user;

    return view('technician-staff.complaint.index',compact('page_data'));




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

    	 return redirect()->route('comp.index')->with('message','succesfully created your field');
    }


    public function create(){
      
       $user =User::where('user_delete_status', 1)->get();
        $customer =Customer::where('customer_status', 1)->get();
         $complainttype =Complainttype::where('complainttype_status', 1)->get();

    	return view('technician-staff.complaint.create')->with('user',$user)->with('customer',$customer)->with('complainttype',$complainttype);
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

        return view('technician-staff.complaint.edit',compact('page_data'));



       

      
    }


    public function update(Request $request ,$id){

    //  dd($request->all());
    	 $complaint=Complaint::find($id);

        

       //dd($complaint->active_deactive);

         

            $staff =$complaint->staff;
            //dd($staff);
            $customer_name =$complaint->customer_name;
             // dd($customer_name);
            $customer_id =$complaint->customer_id;
            //dd($customer_id);

            $complaint_history =new ComplaintHistory();
            $complaint_history->complaint_id =$id;
            $complaint_history->staff =Auth::user()->id;
            $complaint_history->customer_id =$customer_id;
            $complaint_history->customer_name =$customer_name;
            $complaint_history->remarks =$request->complaint_description;
         $complaint_history->save();





      
         $number_of_visit =$complaint->number_of_visit;
             
              $previous_invoice_no =  $number_of_visit;
              //dd($previous_invoice_no+1);

            $unique_id = substr($previous_invoice_no, 5);
            $new_no = $previous_invoice_no+1;
            //dd($new_no);

             $test= str_pad($new_no, 2, '0', STR_PAD_LEFT);

            //dd($test);

         $complaint->number_of_visit =$test;
          $complaint->status = 1;
         $complaint->complaint_description =$request->complaint_description;
         $complaint->technician_status =$request->technician_status;
         $complaint->update();


        

        if($complaint->active_deactive != null)
        {
         // return "hiii";

          if($request->technician_status == 1)
          {
            //return "hiii";
            //dd($complaint->customer_id);
            $cus_id =$complaint->customer_id;
            $customer =Customer::find($cus_id);

              $customer->customer_activation_status = $complaint->active_deactive;
            //dd($customer);
              $customer->update();
          }

          else{
            
          }
        }



       
       
       
        return redirect()->route('comp.index');

    } 

    public function check($id){
    	//return "hiii";
         

    	$complaint =Complaint::find($id);
    	//dd($complaint);

    	$cus_id =$complaint->customer_id;
    	//dd($cus_id);
    	$technician_status = Technicianstatus::where('delete_status', 1)->get();


          
           $page_data['technician_status'] = $technician_status;
    	  $page_data['complaint'] = $complaint;
         


          $cus_device = DB::table('customers')
        ->join('subcodes', 'subcodes.id', '=', 'customers.sub_code')
        ->join('areas','areas.id', '=', 'customers.area')
        ->join('districts','districts.id', '=', 'customers.district')
        ->where('customer_status', 1)
        ->where('customers.id', $cus_id)->first();

         $customer = Customer::where('customer_status', 1)->
                            where('id',$cus_id)->first();
         //dd($customer);


        
         $page_data['customer'] = $customer;
         $page_data['cus_device'] = $cus_device;








       
      
       
      
       // $data=User::all();

        return view('technician-staff.complaint.show',compact('page_data'));
    }
}
