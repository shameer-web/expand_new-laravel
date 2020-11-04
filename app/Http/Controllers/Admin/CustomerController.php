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
use Carbon\Carbon;
use DB;
use Auth;
class CustomerController extends Controller
{
    public function profile($id)
    {   
         $cust_package =CustomerPackage::where('cus_id',$id)->first();
         //dd($cust_package);
         $complainttype =Complainttype::where('complainttype_status', 1)->get();

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
        $customer = Customer::where('customer_status', 1)->
                            where('id',$id)->first();

        $customer_package = DB::table('customer_packages')
        ->join('packages', 'packages.id', '=' , 'customer_packages.package_name')
        ->select('customer_packages.*','packages.package_name as pname','packages.package_type as ptype','packages.package_price as price',
        'customer_packages.created_at as date')
        ->where('customer_packages.cus_id',$id)->get();                 
        return view('admin.customer.profile')->with('customer', $customer)->with('device', $device)
        ->with('cdevice', $cus_device)->with('package', $package)
        ->with('pkg',$customer_package)->with('cust_package',$cust_package)->with('complaint',$complaint)->with('single_com',$single_com)->with('complainttype',$complainttype);
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
        $cus_device->update();

              
        return redirect()->route('customer.profile',$status)->with('message','succesfully created your field');
       
    }
    public function package(Request $request)
    {
        $id = $request->cus_id;
        $package = new CustomerPackage();
        $package->package_name = $request->package_name;
        $package->cus_id = $request->cus_id;
        $package->customer_package_status = '1';
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
          $pay = new Payment();
          $pay->cus_id =$request->cus_id;
          $pay->payment_amount =$request->payment_amount;
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
