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
use App\CustomerPackage;
use DB;
class CustomerController extends Controller
{
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
        ->where('status', $id)->first();                   
        $customer = Customer::where('customer_status', 1)->
                            where('id',$id)->first();

        $customer_package = DB::table('customer_packages')
        ->join('packages', 'packages.id', '=' , 'customer_packages.package_name')
        ->select('customer_packages.*','packages.package_name as pname','packages.package_type as ptype','packages.package_price as price',
        'customer_packages.created_at as date')
        ->where('customer_packages.cus_id',$id)->get();                 
        return view('admin.customer.profile')->with('customer', $customer)->with('device', $device)
        ->with('cdevice', $cus_device)->with('package', $package)
        ->with('pkg',$customer_package);
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
        $district= District::where('district_status', 1)->get();
        return view('admin.customer.create',compact('district', $district));
    }
    public function store(Request $request)
    {
        $customer_prefix="CST-N";
        $customer = Customer::select('id', 'cust_id')->orderBy('id', 'desc')->first();
        
        if($customer){
            $previous_no = $customer->cust_id;
            $cust_id = substr($previous_no, 5);
            $new_no = (int)$cust_id+1;
        }else{
            $new_no = 0001; // Starting No When No Data is Present
        }
        
        $test= $customer_prefix.str_pad($new_no, 4, '0', STR_PAD_LEFT);
        
        
        
        $customer = new Customer();
        $customer->cust_id = $test;
        $customer->enqid = $request->enqid;
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->sub_code = $request->subcode;
        $customer->area = $request->area;
        $customer->crf_no = $request->crfno;
        $customer->installation_address = $request->address;
        $customer->kseb_post_no = $request->ksebno;
        $customer->district = $request->district;
        $customer->pin_code = $request->pincode;
        $customer->communication_address = $request->caddress;
        $customer->customer_type = $request->ctype;
        $customer->id_proof_type = $request->prooftype;
        // $customer->proof = $request->proof;
        $customer->phone = $request->phone;
        $customer->mobile_number = $request->mobile;
        $customer->remark = $request->remark;
        $customer->customer_status = '1';
        $customer->save();
        
        return redirect()->route('customer.create')->with('message','succesfully created your field');
    }
    public function device(Request $request)
    {
        $deviceid= $request->input('deviceid');
        $status = $request->input('status');
        $affected = DB::table('devices')
              ->where('id', $deviceid)
              ->update(['status' => $status]); 
              
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
}
