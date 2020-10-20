<?php

namespace App\Http\Controllers\OfficeStaff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Device;
use App\District;
use App\Company;
use App\Mode;
use App\Loc;
use App\Type;
use App\User;
use DB;

class DeviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user =User::where('user_delete_status', 1)->get();
        $data = DB::table('devices')
             ->join('districts', 'districts.id', '=', 'devices.district')
             ->join('companies', 'companies.id','=','devices.device')
             ->join('modes', 'modes.id','=','devices.model')
             ->join('locs', 'locs.id','=','devices.lco_id')
             ->join('types', 'types.id','=','devices.type')
              ->join('users', 'users.id','=','devices.assign_to')
             ->select('devices.*', 'districts.district_name','companies.company_name','modes.model_name','locs.loc_name','types.type_name','users.name')
             ->where('device_status', 1)
             ->get();
        return view('office-staff.device.index')->with('data',$data)->with('user',$user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $user =User::where('user_delete_status', 1)->get();
        $district= District::where('district_status', 1)->get();
        $company= Company::where('company_status', 1)->get();
        $mode= Mode::where('model_status', 1)->get();
        $loc= Loc::where('loc_status', 1)->get();
        $type= Type::where('type_status', 1)->get();
        return view('office-staff.device.create')->with('district', $district)
        ->with('company',$company)->with('mode',$mode)->with('loc',$loc)
        ->with('type',$type)->with('user',$user);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //


          // dd($request->all());


          $request->validate([

        'company'=>'required|max:300',
        'type'=>'required|max:300',
        'device_id'=>'required|max:300',
        'serial_number'=>'required|max:300',
        'model'=>'required|max:300',
        'district'=>'required|max:300',
        'lco_id'=>'required|max:300',

          ]);
       
          $device_prefix="DEV-N";
          $device = Device::select('id', 'deviceid')->orderBy('id', 'desc')->first();
          
          if($device){
              $previous_device_no = $device->deviceid;
              $unique_id = substr($previous_device_no, 5);
              $new_no = (int)$unique_id+1;
          }else{
              $new_no = 0001; // Starting No When No Data is Present
          }
          
          $deviceno= $device_prefix.str_pad($new_no, 4, '0', STR_PAD_LEFT);
          
          
        $device = new Device();
        $device->deviceid=$deviceno;
        $device->device = $request->company;
        $device->type = $request->type;
        $device->device_id = $request->device_id;
        $device->serial_number = $request->serial_number;
        $device->model = $request->model;
        $device->district = $request->district;
        $device->lco_id = $request->lco_id;
        // $enquiery->assign_to = '1';
        $device->status = '1';

        $device->save();

         return redirect()->route('devices.index')->with('message','succesfully created your field');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Device $device)
    {
        //

         $district= District::where('district_status', 1)->get();
        $company= Company::where('company_status', 1)->get();
        $mode= Mode::where('model_status', 1)->get();
        $loc= Loc::where('loc_status', 1)->get();
        $type= Type::where('type_status', 1)->get();
        $page_data['device'] = $device;
        
        return view('office-staff.device.edit')->with('page_data', $page_data)->with('district', $district)
        ->with('company',$company)->with('mode',$mode)->with('loc',$loc)
        ->with('type',$type);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Device $device)
    {
        //


             $device_update = $device->update($request->toArray());
        if ( $device_update) {

            if (isset($request->device_status) and $request->device_status == '0') {
                Session::flash('toasttype', 'success');
                Session::flash('toasttitle', 'Deleted');
                Session::flash('toastcontent', 'Device  Details Deleted  Successfully');
            } else {

                Session::flash('toasttype', 'success');
                Session::flash('toasttitle', 'Success');
                Session::flash('toastcontent', 'Device  Details updated Successfully');
            }
        } else {
            Session::flash('toasttype', 'error');
            Session::flash('toasttitle', 'Error');
            Session::flash('toastcontent', 'Device  Details Not Updated');
        }

       
        
       
        return redirect()->route('devices.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
