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
        return view('technician-staff.customer.profile')->with('customer', $customer)->with('device', $device)
        ->with('cdevice', $cus_device)->with('package', $package)
        ->with('pkg',$customer_package);
    }
    public function index()
    {
        $customer= Customer::where('customer_status', 1)->get();
        return view('technician-staff.customer.view')->with('customer',$customer);
    }


    public function device(Request $request)
    {
        $deviceid= $request->input('deviceid');
        $status = $request->input('status');
        $affected = DB::table('devices')
              ->where('id', $deviceid)
              ->update(['status' => $status]); 
              
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

    
}
