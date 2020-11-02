<?php

namespace App\Http\Controllers\CollectionAgent;

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
use DB;

class CustomerController extends Controller
{
    //

     public function profile($id)
    {
        
        $device = Device::where('device_status', 1)->get();
        $package = Package::where('package_status', 1)->get();
        $cus_device = DB::table('devices')
        ->join('companies', 'companies.id', '=', 'devices.device')
        ->join('types','types.id', '=', 'devices.type')
        ->join('modes','modes.id', '=', 'devices.model')
        ->join('districts','districts.id', '=', 'devices.district')
        ->join('locs','locs.id', '=', 'devices.lco_id')
        ->where('device_status', 1)
        ->where('devices.id', $id)->first();                   
        $customer = Customer::where('customer_status', 1)->
                            where('id',$id)->first();

        $customer_package = DB::table('customer_packages')
        ->join('packages', 'packages.id', '=' , 'customer_packages.package_name')
        ->select('customer_packages.*','packages.package_name as pname','packages.package_type as ptype','packages.package_price as price',
        'customer_packages.created_at as date')
        ->where('customer_packages.cus_id',$id)->get();                 
        return view('collection-agent.customer.profile')->with('customer', $customer)->with('device', $device)
        ->with('cdevice', $cus_device)->with('package', $package)
        ->with('pkg',$customer_package);
    }
    public function index()
    {
        $customer= Customer::where('customer_status', 1)->get();
        return view('collection-agent.customer.view')->with('customer',$customer);
    }
    
    public function enquiry($enq_id)
    {
        $enquiery= Enquiery::where('enqid',$enq_id)->first();
        echo json_encode($enquiery);
    }
    public function create()
    {


        $district= District::where('district_status', 1)->get();
        $area= Area::where('area_status', 1)->get();
        $subcode= Subcode::where('subcode_status', 1)->get();

        return view('collection-agent.customer.create')->with('district', $district)->with('area',$area)->with('subcode',$subcode);
    }
    public function store(Request $request)
    {   
        
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


         $request->validate([

       
        'email'=>'required|unique:customers|email|max:255',
      

        
        ]);

         //dd($request->enqid);

           

         if(Enquiery::where('enqid', '=', $request->enqid)){
           // $enq =new Enquiery;

            $enquiery = Enquiery::where('enqid', '=', $request->enqid)
                        ->first();
            //dd($enquiery->id);

            $enq =Enquiery::find($enquiery->id);
            //dd($enq->enquiery_status);
            $enq->enquiery_status = 0;
            

            $enq->update();
           


         }


        
        
        
        $customer = new Customer();
        $customer->cust_id = $test;
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
        $customer->mobile_number = $request->mobile;

        $customer->email = $request->email;
         $customer->date = $request->date;
        $customer->remark = $request->remark;
       
       

       
        
       
       
       
       
        // $customer->proof = $request->proof;
        
       
       
        // $customer->customer_status = '1';
        $customer->save();
        
        return redirect()->route('cust.create')->with('message','succesfully created your field');
    }
    public function device(Request $request)
    {
        $deviceid= $request->input('deviceid');
        $status = $request->input('status');
        $affected = DB::table('devices')
              ->where('id', $deviceid)
              ->update(['status' => $status]); 
              
        return redirect()->route('cust.profile',$status)->with('message','succesfully created your field');
       
    }
    public function package(Request $request)
    {
        $id = $request->cus_id;
        $package = new CustomerPackage();
        $package->package_name = $request->package_name;
        $package->cus_id = $request->cus_id;
        $package->customer_package_status = '1';
        $package->save();
        return redirect()->route('cust.profile',$id)->with('message','succesfully created your field');
    }



     public function edit($id){


        
         $customer =Customer::find($id);
         $district= District::where('district_status', 1)->get();
         $area= Area::where('area_status', 1)->get();
         $subcode= Subcode::where('subcode_status', 1)->get();

        return view('collection-agent.customer.edit')->with('customer',$customer)->with('district', $district)->with('area',$area)->with('subcode',$subcode);
    }
    public function update(Request $request , $id){


         $customer=Customer::find($id);
         dd($request->all());
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

       
        
       
        return redirect()->route('cust.index');
    }
}