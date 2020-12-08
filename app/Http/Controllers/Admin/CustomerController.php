<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
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
use App\Channel;
use App\CustomerChannel;
use App\ChannelPayment;
use Carbon\Carbon;
use DB;
use Auth;



class CustomerController extends Controller
{
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

        return view('admin.customer.profile')->with('customer', $customer)->with('device', $device)
        ->with('cdevice', $cus_device)->with('package', $package)
        ->with('pk',$customer_package)->with('cust_package',$cust_package)->with('complaint',$complaint)->with('single_com',$single_com)->with('complainttype',$complainttype)->with('count',$count)->with('payment',$payment)->with('cust_channel',$cust_channel)->with('channel',$channel)->with('count1',$count1)->with('total_amount',$total_amount)->with('due_amount',$due_amount)->with('total_amount1',$total_amount1)->with('due_amount1',$due_amount1)->with('customers_package',$customers_package)->with('customer_device',$customer_device)->with('customers_channel',$customers_channel)->with('customers_channel_count',$customers_channel_count);
    }
    public function index()
    {
        $customer= Customer::where('customer_status', 1)->get();
        return view('admin.customer.view')->with('customer',$customer);
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

        return view('admin.customer.create')->with('district', $district)->with('area',$area)->with('subcode',$subcode)->with('test',$test);
    }
    public function store(Request $request)
    {    
       // dd($request->all());



         $request->validate([



          // 'enqid'=>'required',
          // 'name'=>'required',
          'subcode'=>'required',
          'area'=>'required',
          // 'crfno'=>'required',
          // 'ksebno'=>'required',
          // 'address'=>'required',
          // 'district'=>'required',
          // 'pincode'=>'required',
          // 'caddress'=>'required',
          // 'district1'=>'required',
          // 'pincode1'=>'required',
          // 'ctype'=>'required',
          // 'prooftype'=>'required',
          // 'id_proof_number'=>'required',
          // 'phone'=>'unique:customers',
          // 'mobile_number'=>'unique:customers|max:255',
          //'email'=>'unique:customers|max:255',
          // 'date'=>'required',
          // 'remark'=>'required',

      

        
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
        $customer_prefix= $exist_subcode->subcode.' '.$exist_area->area_name.' ';
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
        
        return redirect()->route('customer.create')->with('message','succesfully created your field');
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
        $cus_device->device_check = 3;

        $cus_device->update();

              
        return redirect()->route('customer.profile',$status)->with('message','succesfully created your field');
       
    }
    public function package(Request $request)
    {  
      //dd($request->all());

      //dd($request->cus_id);

        $customer_id =$request->cus_id;

        $customer =Customer::find($customer_id);
        // dd($customer);

          $customer ->customer_activation_status = 1;
          $customer->update();

      //dd($request->package_name);
      $pack_id = $request->package_name;

       $package =Package::where('id',$pack_id)->first();
       //dd($package->package_type);
       //dd($package->package_price);
       $bc =$package->total_amount;
       //dd($bc);
       $ab =$package->total_amount;
       //dd($ab);


       //dd($bc);
        $id = $request->cus_id;
        $type =$package->package_type;
        //dd($type);

        $package = new CustomerPackage();
        $package->package_name = $request->package_name;
      //dd($bc);
        $package->package_amount =$bc;
        $package->package_total_amount =$ab;
        $package->cus_id = $request->cus_id;
       

     




       
       
         $package->package_status ='1'; 
         // return "hiii";
       


        $package->customer_package_status = '1';
          $activation =Carbon::now();

      
       
       $deactivation = $activation->addDays(30);

       $package->deactivation_date =$deactivation;
      //dd( $deactivation);
    

       //dd($package->deactivation_date);


        $package->save();
        return redirect()->route('customer.profile',$id)->with('message','succesfully created your field');
    }



     public function edit($id){


        
         $customer =Customer::find($id);
         $district= District::where('district_status', 1)->get();
         $area= Area::where('area_status', 1)->get();
         $subcode= Subcode::where('subcode_status', 1)->get();

        return view('admin.customer.edit')->with('customer',$customer)->with('district', $district)->with('area',$area)->with('subcode',$subcode);
    }
    public function update(Request $request, $id){

         //dd($customer);
        $customer=Customer::find($id);
        //dd($request->all());

        


          $customer_update = $customer->update($request->toArray());
          // dd($customer_update);
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

       
        // return "hii";
       
        return redirect()->route('customer.index');
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

        return redirect()->route('cust.index');

        // return "hiiii";



    }

    public function notifications()
    {
         
        $notification = Agentnotifications::where('agentnotification_status', 1)->get(); 
        return view('admin.customer.notification')->with('notification',$notification);
    }

    public function approve($id){
     //dd($id);

        $approve =Agentnotifications::find($id);
        //dd($approve);
        return view('admin.customer.approve')->with('approve',$approve); 
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

            return redirect()->route('customer.index');

         }
    }

    public function update_package(Request $request ,$id){
     //dd($request->all());



        $cust_package =CustomerPackage::where('id',$id)->first();

         //dd( $cust_package->package['package_type']);

        if( $cust_package->package['package_type'] == "Postaid")
        {



          $pay = new Payment();
          $pay->cus_id =$request->cus_id;

          $pay->package_name =$request->package_name;
          $pay->package_type =$request->package_type;
          $pay->transaction_type =$request->transaction_type;
          $pay->package_amount =$request->package_amount;
          
          $pay->package_total_amount =$request->package_total_amount;

          $pay->due_amount =$request->due_amount;
          $pay->balance =$request->balance;
          $pay->total_package_amount =$request->total_package_amount;
          $pay->customer_paid_amount=$request->customer_paid_amount;
          $pay->extra_days_amount=null;
          $pay->gst_number=$request->gst_number;
          $pay->payment_date=$request->payment_date;
         

          //dd($amout);
          $pay->save();



         $cust_package =CustomerPackage::find($id);
        
       
        $balance = $request->total_package_amount - $request->customer_paid_amount;
        //dd($balance);

        $cust_package->package_amount = $request->package_amount;
        $cust_package->transaction_type =$request->transaction_type;
        $cust_package->customer_paid_amount = $request->customer_paid_amount;
        $cust_package->extra_days_amount=null;
        $cust_package->due_amount =$request->due_amount;
        $cust_package->balance =$balance;
        $cust_package->gst_number = $request->gst_number;
        $cust_package->payment_date = $request->payment_date;
        $cust_package->payment_status =1;
        $cust_package->package_status =1;
        $cust_package->update();

        $cust_package =CustomerPackage::where('id',$id)->first();
        }


          







        else{

         

           $pay = new Payment();
          $pay->cus_id =$request->cus_id;

          $pay->package_name =$request->package_name;
          $pay->package_type =$request->package_type;
          $pay->transaction_type =$request->transaction_type;
          $pay->package_amount =$request->package_amount;
          
          $pay->package_total_amount =$request->package_total_amount;

          $pay->due_amount =$request->due_amount;
          $pay->balance =$request->balance;
          $pay->total_package_amount =$request->total_package_amount;
          $pay->customer_paid_amount=$request->customer_paid_amount;
           $pay->extra_days_amount=$request->extra_days_amount;
          
         



          


          $pay->gst_number=$request->gst_number;
          $pay->payment_date=$request->payment_date;
         

          //dd($amout);
          $pay->save();



         $cust_package =CustomerPackage::find($id);

          // dd($cust_package->package_total_amount);
        
        if($request->extra_days_amount == null){
        $balance = $request->total_package_amount - $request->customer_paid_amount;
         }
         else{
          $balance=0;
          
          $package_total_amount=$cust_package->package_total_amount;
          $monts =$request->extra_days_amount/$package_total_amount;
         // dd($monts);
          $day = $monts * 30;
          //dd($day);
           

          $final =$cust_package->created_at;
         

          // $activation =Carbon::now();

      
       
       $deactivation = $final->addDays($day);

        //dd($deactivation);
       // $package->deactivation_date =$deactivation; 
        






         }
       // dd($balance);

        $cust_package->package_amount = $request->package_amount;
        $cust_package->transaction_type =$request->transaction_type;
        $cust_package->customer_paid_amount = $request->customer_paid_amount;
        $cust_package->extra_days_amount=$request->extra_days_amount;
        $cust_package->due_amount =$request->due_amount;
        $cust_package->balance =$balance;
        $cust_package->gst_number = $request->gst_number;
        $cust_package->payment_date = $request->payment_date;
        $cust_package->payment_status =1;
        $cust_package->package_status =1;
        $cust_package->deactivation_date =$deactivation;
        $cust_package->update();

        $cust_package =CustomerPackage::where('id',$id)->first();

        //dd($cust_package);
         
         }
        return view('admin.customer.customer_invoice')->with('cust_package',$cust_package); 



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


    public function chanel(Request $request)

    {  
    //dd($request->all());
     // dd($request->channel_type);
     

         $channel_id = $request->channel_name;

       $channels =Channel::where('id',$channel_id)->first();
      //dd($channels);
       
       //dd($ab);


     
      $channel_name = $request->channel_name;
      $channel_amount =$channels->total_amount;
      $channel_total_amount =$channels->total_amount;
      //dd($channel_total_amount);
      $cus_id =$request->cus_id;


       
         $id = $request->cus_id;

        $channel = new CustomerChannel();
        $channel->channel_name = $channel_name;
      //dd($bc);
        $channel->channel_amount = $channel_amount;
        $channel->channel_total_amount =$channel_total_amount;
        $channel->cus_id = $cus_id;
        //dd($channels->channel_type);
       
         $channel->channel_status ='1'; 
         // return "hiii";
       

        $channel->customer_channel_status = '1';
        $channel->save();
        return redirect()->route('customer.profile',$id)->with('message','succesfully created your field');
    }




    public function update_channel(Request $request ,$id){
      
     //dd($request->all());


        $cust_channel =CustomerChannel::where('id',$id)->first();

         //dd( $cust_channel->channel['channel_type']);

        if( $cust_channel->channel['channel_type'] == "Postaid")
        {


          $pay = new ChannelPayment();
          $pay->cus_id =$request->cus_id;
          $pay->channel_name =$request->channel_name;
          $pay->channel_type =$request->channel_type;
          $pay->transaction_type =$request->transaction_type;
          $pay->channel_amount =$request->channel_amount;
          
          $pay->channel_total_amount =$request->channel_total_amount;

          $pay->due_amount =$request->due_amount;
          $pay->balance =$request->balance;
          $pay->total_channel_amount =$request->total_channel_amount;
          $pay->customer_paid_amount=$request->customer_paid_amount; 
          $pay->gst_number=$request->gst_number;
          $pay->payment_date=$request->payment_date;
         

          //dd($amout);
          $pay->save();



         


         $cus_channel =CustomerChannel::find($id);
        
       
        $balance = $request->total_channel_amount - $request->customer_paid_amount;
        //dd($balance);

        $cus_channel->channel_amount = $request->channel_amount;
        $cus_channel->transaction_type =$request->transaction_type;
        $cus_channel->customer_paid_amount = $request->customer_paid_amount;
        $cus_channel->balance =$balance;
        $cus_channel->gst_number = $request->gst_number;
        $cus_channel->payment_date = $request->payment_date;
        $cus_channel->payment_status =1;
        $cus_channel->channel_status =1;
        $cus_channel->update();

        $cus_channel =CustomerChannel::where('id',$id)->first();
        }





        else{
        $cus_channel =CustomerChannel::find($id);
        //dd($cus_package);

         

          $pay = new ChannelPayment();
          $pay->cus_id =$request->cus_id;
          $pay->channel_name =$request->channel_name;
          $pay->channel_type =$request->channel_type;
          $pay->transaction_type =$request->transaction_type;
          $pay->channel_amount =$request->channel_amount;


          $pay->channel_total_amount =$request->channel_total_amount;
          $pay->due_amount =$request->channel_total_amount;
          $pay->balance =$request->balance;
          $pay->total_channel_amount =$request->channel_total_amount;
          $pay->customer_paid_amount=$request->channel_total_amount; 
          $pay->gst_number=$request->gst_number;
          $pay->payment_date=$request->payment_date;
         

        
         $pay->save();
     


       

        $cus_channel->channel_amount = $request->channel_amount;
        $cus_channel->transaction_type =$request->transaction_type;
        $cus_channel->customer_paid_amount = $request->channel_total_amount;
        $cus_channel->balance =$request->balance;
        $cus_channel->gst_number = $request->gst_number;
        $cus_channel->payment_date = $request->payment_date;
        $cus_channel->payment_status =1;
        $cus_channel->channel_status =1;
        $cus_channel->update();
        // dd($id);
        $cus_channel =CustomerChannel::where('id',$id)->first();
        //dd($cus_channel);
         }
        return view('admin.customer.customer_channel_invoice')->with('cus_channel',$cus_channel); 



    
    }







}
