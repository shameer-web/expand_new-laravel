<?php

namespace App\Http\Controllers\TechnicianStaff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\User;
use App\Enquiery;
use App\District;
use App\Customer;
use App\Company;
use App\Device;
use App\Package;
use App\Area;
use App\Subcode;
use App\CustomerPackage;
use App\Agentnotifications;
use App\Payment;
use App\Complainttype;
use App\TechnicianStaff;
use App\Channel;
use App\CustomerChannel;
use Carbon\Carbon;
use DB;
use Auth;

class CustomerController extends Controller
{
    //


  public function profile($id)
    {   
         
         $channel = Channel::where('channel_status', 1)->get();

         $cust_channel =CustomerChannel::where('cus_id',$id)->orderBy("id", "desc")->first();

        // dd( $cust_channel->channel['channel_type']);

           if($cust_channel == null)
         {
           $total_amount = null;
            $due_amount = null;
         }
         else{

               $channel_amount = $cust_channel->channel_total_amount;

            // dd($channel_amount);

             // $per_day = $channel_amount/30;
             //dd($per_day);

             // $created_date =$cust_channel->created_at;
             //dd($created_date);

         $payment_date = Carbon::now();


          // $lastDayofMonth =    \Carbon\Carbon::parse($created_date)->endOfMonth()->toDateString();


           //$firstDay = new Carbon('first day of next month'); 
        // $lastDay = new Carbon('last day of last month'); 
       // dd($firstDay);

        //dd($lastDayofMonth);






        

           $final =$cust_channel->payment_date;

            $final1 =$cust_channel->created_at;



           $formatted_dt1=Carbon::parse($final);
         // dd($formatted_dt1);

        $formatted_dt2=Carbon::parse($final1);
        //dd($formatted_dt2);

        $date_diff=$formatted_dt1->diffInMonths($formatted_dt2);
       // dd($date_diff);

       


          if($date_diff == 0){
            $amount = $channel_amount;
        }
        else{
        $amount = $channel_amount * $date_diff;
         
          }
         // dd($total_amount);

           $due_amount = $amount;

        $total_amount = $amount + $cust_channel->balance;


        

      
         //dd($last_day);



       


     


         }



          

          //dd($cust_channel);
         if($cust_channel == null)
         {
           $count1 = null;
         }
         else{



         $time = strtotime($cust_channel->payment_date);
         //dd($time);
         $final =$cust_channel->payment_date;
         //dd($final);
         $final1 = Carbon::now();
        


         $formatted_dt1=Carbon::parse($final);
         // dd($formatted_dt1);

        $formatted_dt2=Carbon::parse($final1);
        //dd($formatted_dt2);

        $date_diff=$formatted_dt1->diffInDays($formatted_dt2);
        //dd($date_diff);
        $count1 = 30-$date_diff;
        //dd($count);
              

        }





         $cust_package =CustomerPackage::where('cus_id',$id)->orderBy("id", "desc")->first();
         //dd($cust_package);
         if($cust_package == null)
         {
           $count = null;
           $total_amount1 = null;
           $due_amount1 = null;
         }
         else{


          


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
        //dd($count);

        }
              

        }
               

       


         $complainttype =Complainttype::where('complainttype_status', 1)->get();
         
          $payment= DB::table('payments')
                 ->where('cus_id',$id)
                 ->orderBy('id', 'desc')
                 ->first();
                 //dd($payment);




         $complaint= DB::table('complaints')
                 ->where('customer_name',$id)
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
                 ->where('customer_name',$id)
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





        
        $device = Device::where('device_status', 1)->where('cus_device_status', 1)->get();


        $package = Package::where('package_status', 1)->get();
        $cus_device = DB::table('devices')
        ->join('companies', 'companies.id', '=', 'devices.device')
        ->join('types','types.id', '=', 'devices.type')
        ->join('modes','modes.id', '=', 'devices.model')
        ->join('districts','districts.id', '=', 'devices.district')
        ->join('locs','locs.id', '=', 'devices.lco_id')
        ->select('devices.*','companies.company_name','types.type_name','modes.model_name','districts.district_name','locs.loc_name')
        ->where('device_status', 1)
        ->where('devices.status', $id)->first(); 

        //dd($cus_device);                  
        $customer = Customer::where('customer_status', 1)->
                            where('id',$id)->first();

        $customer_package = DB::table('customer_packages')
        ->join('packages', 'packages.id', '=' , 'customer_packages.package_name')
        ->select('customer_packages.*','packages.package_name as pname','packages.package_type as ptype','packages.package_price as price',
        'customer_packages.created_at as date')
        ->where('customer_packages.cus_id',$id)->orderBy("id", "desc")->first();
        //dd($customer_package);  


         $customers_package = DB::table('customer_packages')
         ->join('packages', 'packages.id', '=', 'customer_packages.package_name')
         ->select('customer_packages.*','packages.package_name','packages.package_type') 
         ->where('customer_package_status',1)
         ->where('cus_id',$id)
         ->orderBy('id', 'desc')
        ->get();


        $customers_channel = DB::table('customer_channels')
         ->join('channels', 'channels.id', '=', 'customer_channels.channel_name')
         ->select('customer_channels.*','channels.channel_name','channels.channel_type') 
         ->where('customer_channel_status',1)
         ->where('cus_id',$id)
         ->orderBy('id', 'desc')
        ->get();

         $customers_channel_count = CustomerChannel::get()->where('customer_channel_status',1)->where('cus_id',$id)->where('status',0)->count();

         //dd($customers_channel_count);

        //dd($customers_package_count);

         $customer_device= Device::where('device_status', 1)->where('devices.status', $id)->get();

        return view('technician-staff.customer.profile')->with('customer', $customer)->with('device', $device)
        ->with('cdevice', $cus_device)->with('package', $package)
        ->with('pk',$customer_package)->with('cust_package',$cust_package)->with('complaint',$complaint)->with('single_com',$single_com)->with('complainttype',$complainttype)->with('count',$count)->with('payment',$payment)->with('cust_channel',$cust_channel)->with('channel',$channel)->with('count1',$count1)->with('total_amount',$total_amount)->with('due_amount',$due_amount)->with('total_amount1',$total_amount1)->with('due_amount1',$due_amount1)->with('customers_package',$customers_package)->with('customer_device',$customer_device)->with('customers_channel',$customers_channel)->with('customers_channel_count',$customers_channel_count);
    }

    

        public function index()
    {
        $customer= Customer::where('customer_status', 1)->get();
        return view('technician-staff.customer.view')->with('customer',$customer);
    }
    
    public function enquiry($enq_id)
    {
        $enquiery= Enquiery::where('enqid',$enq_id)->first();
        echo json_encode($enquiery);
    }
    public function create()
    {
        




        $customer_prefix="CST-N";
        $customer = Customer::select('id', 'cust_id')->orderBy('id', 'desc')->first();
        
        if($customer){
            $previous_no = $customer->cust_id;
            //dd($previous_no);
            $cust_id = substr($previous_no, 5);
            //dd($cust_id);
            $new_no = $previous_no+1;
            //dd($new_no);
        }else{
            $new_no = 0001; // Starting No When No Data is Present
        }
        
        $test=$new_no;
       //dd($test);


        $district= District::where('district_status', 1)->get();
        $area= Area::where('area_status', 1)->get();
        $subcode= Subcode::where('subcode_status', 1)->get();

        return view('technician-staff.customer.create')->with('district', $district)->with('area',$area)->with('subcode',$subcode)->with('test',$test);
    }
    public function store(Request $request)
    {    
         



         $request->validate([



          'enqid'=>'required',
          'name'=>'required',
          'subcode'=>'required',
          'area'=>'required',
          'crfno'=>'required',
          'ksebno'=>'required',
          'address'=>'required',
          'district'=>'required',
          'pincode'=>'required',
          'caddress'=>'required',
          'district1'=>'required',
          'pincode1'=>'required',
          'ctype'=>'required',
          'prooftype'=>'required',
          'id_proof_number'=>'required',
          'phone'=>'required|unique:customers',
          'mobile_number'=>'required|unique:customers|max:255',
          'email'=>'required|unique:customers|email|max:255',
          'date'=>'required',
          'remark'=>'required',

      

        
        ]);
         


         


          //dd($request->all());
          // $subcode =new Subcode();



        // dd($request->all());
        // $customer_prefix="CST-N";
        // $customer = Customer::select('id', 'cust_id')->orderBy('id', 'desc')->first();
        
        // if($customer){
        //     $previous_no = $customer->cust_id;
        //     $cust_id = substr($previous_no, 5);
        //     $new_no = (int)$cust_id+1;
        // }else{
        //     $new_no = 0001; // Starting No When No Data is Present
        // }
        
        // $test= $customer_prefix.str_pad($new_no, 4, '0', STR_PAD_LEFT);




           $exist_subcode = Subcode::where('id', '=', $request->subcode)
                         ->first();

           $exist_area = Area::where('id', '=', $request->area)
                         ->first();

         //dd( $exist_area->area_name);
        $customer_prefix= $exist_subcode->subcode.''.$exist_area->area_name.'-';
        //dd($customer_prefix);
        $customer = Customer::select('id', 'cust_id')->orderBy('id', 'desc')->first();
       // dd($customer->id);
        
        if($customer){
            // $previous_no = $customer->id;
            $cust_id = $customer->id;
             $new_no = (int)$cust_id+1;
        }else{
            $new_no = 1; // Starting No When No Data is Present
        }
        
        $test= $customer_prefix.str_pad($new_no, STR_PAD_LEFT);
      // dd($test);


         //dd($request->enqid);

           

         if(Enquiery::where('enqid', '=', $request->enqid)){
           // $enq =new Enquiery;

            $enquiery = Enquiery::where('enqid', '=', $request->enqid)
                        ->first();
            //dd($enquiery->id);

            $enq =Enquiery::find($enquiery->id);
            //dd($enq->enquiery_status);
            $enq->status = 1;
            

            $enq->update();
           


         }


        
        
        
        $customer = new Customer();
        // $customer->cust_id = $test;
        $customer->cust_id =$request->cust_id;
        $customer->area_subcode_id =$test;
        $customer->enqid = $request->enqid;
        $customer->name = $request->name;
        $customer->sub_code = $request->subcode;
        $customer->area = $request->area;
        $customer->crf_no = $request->crfno;
        $customer->kseb_post_no = $request->ksebno;
        $customer->installation_address = $request->address;
        $customer->district = $request->district;
        $customer->pin_code = $request->pincode;
        $customer->communication_address = $request->caddress;
        $customer->district1 = $request->district1;
        $customer->pin_code1 = $request->pincode1;

        $customer->customer_type = $request->ctype;
        $customer->id_proof_type = $request->prooftype;
        $customer->id_proof_number = $request->id_proof_number;

        $customer->phone = $request->phone;
        $customer->mobile_number = $request->mobile_number;

        $customer->email = $request->email;
         $customer->date = $request->date;
        $customer->remark = $request->remark;
       
       

       
        
       
       
       
       
        // $customer->proof = $request->proof;
        
       
       
        // $customer->customer_status = '1';
        $customer->save();
        
        return redirect()->route('customers.create')->with('message','succesfully created your field');
    }
    public function device(Request $request)
    {   

      //dd($request->all());
        // $deviceid= $request->input('deviceid');
        // $status = $request->input('status');
        // $affected = DB::table('devices')
        //       ->where('id', $deviceid)
        //       ->update(['status' => $status]); 

         //dd($request->deviceid);
        $id = $request->deviceid;

        $cus_device =Device::find($id);

        //dd($cus_device);
        $status = $request->status;
        $cus_device->status = $request->status;
        $cus_device->cus_device_status = 0;
        $cus_device->update();

              
        return redirect()->route('customers.profile',$status)->with('message','succesfully created your field');
       
    }
    public function package(Request $request)
    {
        $id = $request->cus_id;
        $package = new CustomerPackage();
        $package->package_name = $request->package_name;
        $package->cus_id = $request->cus_id;
        $package->customer_package_status = '1';
        $package->save();
        return redirect()->route('customers.profile',$id)->with('message','succesfully created your field');
    }



     public function edit($id){


        
         $customer =Customer::find($id);
         $district= District::where('district_status', 1)->get();
         $area= Area::where('area_status', 1)->get();
         $subcode= Subcode::where('subcode_status', 1)->get();

        return view('technician-staff.customer.edit')->with('customer',$customer)->with('district', $district)->with('area',$area)->with('subcode',$subcode);
    }
    public function update(Request $request , $id){


         $customer=Customer::find($id);
        // dd($request->all());
          $customer_update = $customer->update($request->toArray());
        if ($customer_update) {

            if (isset($request->customer_status) and $request->customer_status == '0') {
                Session::flash('toasttype', 'success');
                Session::flash('toasttitle', 'Deleted');
                Session::flash('toastcontent', 'customer  Details Deleted  Successfully');
            } else {

                Session::flash('toasttype', 'success');
                Session::flash('toasttitle', 'Success');
                Session::flash('toastcontent', 'customer  Details updated Successfully');
            }
        } else {
            Session::flash('toasttype', 'error');
            Session::flash('toasttitle', 'Error');
            Session::flash('toastcontent', 'customer  Details Not Updated');
        }

       
        
       
        return redirect()->route('customers.index');
    }


    public function notification(Request $request , $id){

       //dd(Auth::user()->name);
        
        //dd($id);
        $not =new Agentnotifications();


        $not->cust_id =$id;
        $not->agent_name =Auth::user()->name;
        $not->name =$request->name;
        $not->sub_code =$request->subcode;
        $not->area =$request->area;
        $not->crf_no =$request->crfno;
        $not->kseb_post_no =$request->ksebno;
        $not->installation_address =$request->address;
        $not->district =$request->district;
        $not->pin_code =$request->pincode;
        $not->communication_address =$request->caddress;
        $not->district1 =$request->district1;
        $not->pin_code1 =$request->pincode1;
        $not->customer_type =$request->ctype;
        $not->id_proof_type =$request->prooftype;
        $not->id_proof_number =$request->id_proof_number;
        $not->phone =$request->phone;
        $not->mobile_number =$request->mobile;
        $not->email =$request->email;
        $not->date =$request->date;
        $not->remark =$request->remark;

        $not->save();

        return redirect()->route('customers.index');

        // return "hiiii";


    }

    public function notifications()
    {
         
        $notification = Agentnotifications::where('agentnotification_status', 1)->get(); 
        return view('technician-staff.customer.notification')->with('notification',$notification);
    }

    public function approve($id){
     //dd($id);

        $approve =Agentnotifications::find($id);
        //dd($approve);
        return view('technician-staff.customer.approve')->with('approve',$approve); 
    }


    public function notification_update(Request $request , $id)
    {
        //dd($request->all());


        if(Agentnotifications::where('id', '=', $request->notification_id)){

            

            $notification =Agentnotifications::find($request->notification_id);
            $notification->agentnotification_status = 0;
            
        $notification->update();







         $approve=Customer::find($id);
        // dd($request->all());
          $approve_update = $approve->update($request->toArray());
        // if ($approve_update) {

        //     if (isset($request->customer_status) and $request->customer_status == '0') {
        //         Session::flash('toasttype', 'success');
        //         Session::flash('toasttitle', 'Deleted');
        //         Session::flash('toastcontent', 'customer  Details Deleted  Successfully');
        //     } else {

        //         Session::flash('toasttype', 'success');
        //         Session::flash('toasttitle', 'Success');
        //         Session::flash('toastcontent', 'customer  Details updated Successfully');
        //     }
        // } else {
        //     Session::flash('toasttype', 'error');
        //     Session::flash('toasttitle', 'Error');
        //     Session::flash('toastcontent', 'customer  Details Not Updated');
        // }

            return redirect()->route('customers.index');

         }
    }

    public function update_package(Request $request ,$id){
      //dd($request->all());
           //dd($id);
        $cus_package =CustomerPackage::find($id);
        //dd($request->package_amount);



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

    public function device_status(Request $request , $id){
     // dd($id);
     // dd($request->all());
      $device = Device::find($id);
      //dd($device);
      $device->device_check = $request->device_check;
      $device->update();

      return redirect()->back();

    }



    
}
