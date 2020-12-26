<?php

namespace App\Http\Controllers\OfficeStaff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Complaint;
use App\User;
use App\Customer;
use App\Complainttype;
use App\CustomerPackage;
use App\CustomerChannel;
use App\Device;
use Carbon\Carbon;
use App\ActivationDeactivation;
use DB;

class ComplaintController extends Controller
{
    //



    public function index(){
       

         $page_data = [];

         //may be 
         

   $complaint =Complaint::where('complaint_status', 1)->get();
   
   // $complaint = DB::table('complaints')
   //              ->join('users', 'users.id', '=', 'complaints.staff')
   //              ->where('complaint_status', 1)->get();
   //  dd($complaint);
    

     foreach ($complaint as $data) {
         $data['complaint'] = Complainttype::whereIn('id',$data->complaint)->get();
        // dd($data['complaint']);
         $value[]=$data; 
     }
     //dd($data);

     if(isset($value)){

      $page_data['value'] = $value;
     }

     // $user= User::where('user_delete_status', 1)->get();

     $user =User::where('user_delete_status', 1)->where('role', 3)->get();
       $page_data['user'] = $user;

    return view('office-staff.complaint.index',compact('page_data'));




    }

    public function store(Request $request)
    { 

     // dd($request->all());

     // $abc =$request->validate([

     //       // 'staff' => 'unique:complaints,assist_by',
     //       'assist_by' => 'unique:complaints,staff',

     //    ]);



      $user =new Complaint();


           $exist_staff =Complaint::where('staff', '=', $request->assist_by)
                         ->where('complaint_status','=',1)
                         ->first();

            $exist_assist_staff =Complaint::where('assist_by', '=', $request->staff)
                         ->where('complaint_status','=',1)
                         ->first();

           if($exist_staff){
                //return "already added";

             return redirect()->route('complaints.create')->with('message',' This Technician already leadership in other complaints, so please select another Technician staff as assistant staff.');
           }

          

            elseif($exist_assist_staff){
               // return "already added";



             return redirect()->route('complaints.create')->with('data',' This Technician already assist in other complaints, so please select another Technician staff as main staff.');
           }             




       else{

          


      
      //dd($request->complaint);
     //dd($request->all());

      //dd($request->customer_id);
      $cus_id =$request->customer_id;
      $cus =Customer::find($cus_id);
      //dd($cus);
      $cus->kseb_post_no = $request->post_no;
      $cus->phone = $request->phone;
      $cus->mobile_number = $request->mobile;

      $cus->update();



        

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
       
      
      $complaint->customer_id =$request->customer_id;
      $complaint->customer_name =$request->cus_name;
      $complaint->phone_no =$request->phone;
      $complaint->email =$request->email;
      $complaint->staff =$request->staff;
      $complaint->assist_by =$request->assist_by;

      $complaint->post_no =$request->post_no;
      // $complaint->type =$request->type;


        $complaint->complaint =$request->complaint;
        // $complaint->complaint = json_encode($request->complaint);
         $complaint->other_complaint =$request->other_complaint;
         $complaint->active_deactive =$request->active_deactive;
         $complaint->active_deactive_date =$request->active_deactive_date;

        $complaint->payment_due =$request->payment_due;
        $complaint->customer_request =$request->customer_request;
        $complaint->remarks =$request->remarks;
        $complaint->priority =$request->priority;



      $complaint->save();

       return redirect()->route('complaints.index');
    }

    }


    public function create(){
      
     //   $user =User::where('user_delete_status', 1)->get();
     //    $customer =Customer::where('customer_status', 1)->get();
     //     $complainttype =Complainttype::where('complainttype_status', 1)->get();

      // return view('office-staff.complaint.create')->with('user',$user)->with('customer',$customer)->with('complainttype',$complainttype);

      return view('office-staff.complaint.search');
    }

   

    public function complaint_reg(Request $request)

    {   
     // dd($request->all());
        $request->validate([

         'search'=>'required',
         // "search" => "required|exists:customers",
         ]);

       $cus_id =$request->search;


         $exist_customer = Customer::where('id', '=', $cus_id)
                         ->where('customer_status', 1)
                         ->first();
         // dd($exist_customer);
            if($exist_customer == null){
              $message ="pls enter Valid Customer Id";
              //dd($message);
            //  return redirect()->back()->with('message',$message);
              return redirect()->route('complaints.create')->with('message',$message);
;
            }

            else{
           
    



      
      //dd($request->all());
       
        //dd($cus_id);
        $cust =Customer::find($cus_id);
        //dd($customer);


        $cust_package =CustomerPackage::where('cus_id',$cus_id)->orderBy("id", "desc")->first();
        //dd($cust_package);
       
        $cust_channel =CustomerChannel::where('cus_id',$cus_id)->orderBy("id", "desc")->first();
        //dd($cust_channel);
        
        //$user =User::where('user_delete_status', 1)->get();
         $user =User::where('user_delete_status', 1)->where('role', 3)->get();
        $customer =Customer::where('customer_status', 1)->get();
        $complainttype =Complainttype::where('complainttype_status', 1)->get();


        // $cust_device =Device::where('id',$cus_id)->first();
            $cust_device = DB::table('devices')
        ->join('companies', 'companies.id', '=', 'devices.device')
        ->join('types','types.id', '=', 'devices.type')
        ->join('modes','modes.id', '=', 'devices.model')
        ->join('districts','districts.id', '=', 'devices.district')
        ->join('locs','locs.id', '=', 'devices.lco_id')
        ->select('devices.*','companies.company_name','types.type_name','modes.model_name','districts.district_name','locs.loc_name')
        ->where('device_status', 1)
        ->where('devices.status', $cus_id)->first(); 




         //dd($cust_device);



     // $complaint =Complaint::where('complaint_status', 1)->first();
      //dd($complaint);

        $complaint = null;
        
         $page_data = [];

         //may be 
         

   $comp =Complaint::where('complaint_status', 1)->where('customer_id',$cus_id)->get();
  // dd($complaint);
   
   
    

     foreach ($comp as $data) {
         $data['complaint'] = Complainttype::whereIn('id',$data->complaint)->get();
        // dd($data['complaint']);
         $value[]=$data; 
     }
     //dd($data);

     if(isset($value)){

      //$page_data['value'] = $value;
     // $complaint = $value;
     }

     //dd($complaint);
    
   
    $pend_complaint =Complaint::where('complaint_status', 1)->where('customer_id',$cus_id)->where('status',0)->first();

     // dd($pend_complaint);

    if($pend_complaint == null){

       $pending_complaint =Complaint::where('complaint_status', 1)->where('customer_id',$cus_id)->where('status',0)->get();
    }

    else{
    
      $page_data = [];
         

   $com =Complaint::where('complaint_status', 1)->where('customer_id',$cus_id)->where('status',0)->get();
   //dd($com);
   
   
    

     foreach ($com as $dat) {
         $dat['complaint'] = Complainttype::whereIn('id',$dat->complaint)->get();
         //dd($data['complaint']);
         $valu[]=$dat; 
     }
     //dd($dat);

     if(isset($valu)){

      //$page_data['value'] = $value;
      $pending_complaint = $valu;



     }

        
     }
    // dd($pending_complaint);


      // $complaint= DB::table('complaints')
      //            ->where('complaint_status',1)
      //            ->where('customer_id',$cus_id)
      //            ->orderBy('id', 'desc')
      //            ->first();
      // //dd($complaint);
      //     if($complaint == null){
      //              $abcd = '';
      //             // dd($abcd);
      //              $abc = json_decode($abcd);
      //            //dd($abc);
      //              $single_com = '';
      //       }
      //     else{
      //         $complaint= DB::table('complaints')
      //            ->where('complaint_status',1)
      //            ->where('customer_id',$cus_id)
      //            ->orderBy('id', 'desc')
      //            ->first();
      //            //dd($complaint);
      //   $abcd =$complaint->complaint;
      //  // dd($abcd);
      //    $abc = json_decode($abcd);
         
      //    //dd($abc);
        // $single_com = Complainttype::whereIn('id',$abc)->get();
        //dd($single_com);
       
      //   }


         // $package_payment= DB::table('payments')
         //         ->where('cus_id',$cus_id)
         //         ->orderBy('id', 'desc')
         //         ->get();



           $package_payment = DB::table('payments')
         ->join('packages', 'packages.id', '=', 'payments.package_name')
         ->select('payments.*','packages.package_name') 
         ->where('cus_id',$cus_id)
                 ->orderBy('id', 'desc')
                 ->get();      
         //dd($package_payment); 

       $customer_package = DB::table('customer_packages')
         ->join('packages', 'packages.id', '=', 'customer_packages.package_name')
         ->select('customer_packages.*','packages.package_name','packages.package_type') 
         ->where('customer_package_status',1)
         ->where('cus_id',$cus_id)
         ->orderBy('id', 'desc')
        ->get();


         $customer_channel = DB::table('customer_channels')
         ->join('channels', 'channels.id', '=', 'customer_channels.channel_name')
         ->select('customer_channels.*','channels.channel_name','channels.channel_type') 
         ->where('customer_channel_status',1)
         ->where('cus_id',$cus_id)
         ->orderBy('id', 'desc')
        ->get();

        //dd($customer_channel);



         //dd($customer_package);

        

        $customers_package_count = CustomerPackage::get()->where('customer_package_status',1)->where('cus_id',$cus_id)->where('status',0)->count();

         $customers_channel_count = CustomerChannel::get()->where('customer_channel_status',1)->where('cus_id',$cus_id)->where('status',0)->count();

         $pending_complaint_count =Complaint::get()->where('complaint_status',1)->where('customer_id',$cus_id)->where('status',0)->count();
          //dd($pending_complaint_count);


         
         $cust_pack =CustomerPackage::where('cus_id',$cus_id)->orderBy("id", "desc")->get();
         //dd($cust_package);

         if($cust_package == null)
         {
           $count = null;
           $total_amount1 = null;
           $due_amount1 = null;
         }
         else{


         foreach($cust_pack as  $cust_package ){
         


          


                 $package_amount = $cust_package->package_total_amount;

             //dd($package_amount);

           

         $payment_date = Carbon::now();


          






        

           $final =$cust_package->payment_date;

            $final1 =$cust_package->created_at;



           $formatted_dt1=Carbon::parse($final);
         // dd($formatted_dt1);

        $formatted_dt2=Carbon::parse($final1);
        //dd($formatted_dt2);

        $date_diff=$formatted_dt1->diffInMonths($formatted_dt2);
       // dd($date_diff);

       


          if($date_diff == 0){
            $amount1 = $package_amount;
        }
        else{
        $amount1 = $package_amount * $date_diff;
         
          }

          //dd($amount1);
         

           $due_amount1 = $amount1;

        $total_amount1 = $amount1 + $cust_package->balance;

        //dd($total_amount1);






         $time = strtotime($cust_package->payment_date);
         //dd($time);
         //dd( $cust_package->package_total_amount);
         //dd( $cust_package->customer_paid_amount);
         $package_total_amount = $cust_package->package_total_amount;
         $extra_days_amount = $cust_package->extra_days_amount;

         if($extra_days_amount > $package_total_amount)
         {
         // $day =$package_total_amount/30;
        //dd($day);


          $monts =$extra_days_amount/$package_total_amount;
          $day = $monts * 30;
          //dd($day);
           

          $final =$cust_package->created_at;
         //dd($final);
         $final1 = Carbon::now();
        


         $formatted_dt1=Carbon::parse($final);
         // dd($formatted_dt1);

        $formatted_dt2=Carbon::parse($final1);
        //dd($formatted_dt2);

        $date_diff=$formatted_dt1->diffInDays($formatted_dt2);
        //dd($date_diff);
        $count = $day-$date_diff;
       // dd($count);  

         }

         else{

         $final =$cust_package->created_at;
         //dd($final);
         $final1 = Carbon::now();
        


         $formatted_dt1=Carbon::parse($final);
         // dd($formatted_dt1);

        $formatted_dt2=Carbon::parse($final1);
        //dd($formatted_dt2);

        $date_diff=$formatted_dt1->diffInDays($formatted_dt2);
        //dd($date_diff);
        $count = 30-$date_diff;
       // dd($count);

        }
              

        }
      }

 
















                  $channel_payment = DB::table('channel_payments')
         ->join('channels', 'channels.id', '=', 'channel_payments.channel_name')
         ->select('channel_payments.*','channels.channel_name') 
         ->where('cus_id',$cus_id)
                 ->orderBy('id', 'desc')
                 ->get(); 
          //dd($channel_payment);      
          
          
        //     $customer_device = DB::table('devices')
        // ->join('companies', 'companies.id', '=', 'devices.device')
        // ->join('types','types.id', '=', 'devices.type')
        // ->join('modes','modes.id', '=', 'devices.model')
        // ->join('districts','districts.id', '=', 'devices.district')
        // ->join('locs','locs.id', '=', 'devices.lco_id')
        // ->select('devices.*','devices.device as company','devices.model as models','devices.device_id as deviceid','devices.serial_number as serialnumber','devices.lco_id as lcoid','devices.district as dist')
        // ->where('device_status', 1)
        // ->where('devices.status', $cus_id)->get();


           $customer_device= Device::where('device_status', 1)->where('devices.status', $cus_id)->get();
           // return view('office-staff.device.index')->with('data',$data);

        //dd($customer_device); 
         


      return view('office-staff.complaint.complaint_profile')->with('user',$user)->with('customer',$customer)->with('complainttype',$complainttype)->with('cust',$cust)->with('cust_package',$cust_package)->with('cust_device',$cust_device)->with('package_payment',$package_payment)->with('channel_payment',$channel_payment)->with('cust_channel',$cust_channel)->with('customer_device',$customer_device)->with('customer_package',$customer_package)->with('count',$count)->with('customers_package_count',$customers_package_count)->with('customer_channel',$customer_channel)->with('customers_channel_count',$customers_channel_count)->with('pending_complaint_count',$pending_complaint_count)->with('pending_complaint',$pending_complaint)->with('complaint',$complaint);
        }
       
    }




    public function edit($id){

          // return "hiiii";

         $complaint =Complaint::find($id);


          //$user =User::where('user_delete_status', 1)->get();
          $user =User::where('user_delete_status', 1)->where('role', 3)->get();
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

     // dd($request->all());

        

        $exist_staff =Complaint::where('staff', '=', $request->assist_by)
                         ->where('complaint_status','=',1)
                         ->first();

            $exist_assist_staff =Complaint::where('assist_by', '=', $request->staff)
                         ->where('complaint_status','=',1)
                         ->first();

           if($exist_staff){
                //return "already added";

             return redirect()->back()->with('message',' This Technician already leadership in other complaints, so please select another Technician staff as assistant staff.');
           }

          

            elseif($exist_assist_staff){
               // return "already added";



             return redirect()->back()->with('data',' This Technician already assist in other complaints, so please select another Technician staff as main staff.');
           }             






        else{

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


    // public function store_data(Request $request){
    //   dd($request->all());
    // }




  

}
