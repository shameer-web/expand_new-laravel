<?php

namespace App\Http\Controllers\OfficeStaff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;
use App\User;
use App\Enquiery;
use DB;

class EnquiryController extends Controller
{
    //


     public function index()
    {
        //

            $user =User::where('user_delete_status', 1)->get();
            $data = DB::table('enquieries')
             ->join('users', 'enquieries.assign_to', '=', 'users.id')
             ->select('enquieries.*', 'users.name')
             ->where('enquiery_status', 1)
             ->get();

             return view('office-staff.enquiery.index')->with('data',$data)->with('user',$user);
    }


     public function create()
    {
        //

        $data =User::where('user_delete_status', 1)->get();
        $page_data['data']=$data;
       // $page_data['title']="Create Vendor";
        //$page_data['role']=3;

        return view('office-staff.enquiery.create',compact('page_data'));
       
    }



     public function store(Request $request)
    {
        $invoice_prefix="ENQ-N";
        $invoice = Enquiery::select('id', 'enqid')->orderBy('id', 'desc')->first();
        
        if($invoice){
            $previous_invoice_no = $invoice->enqid;
            $unique_id = substr($previous_invoice_no, 5);
            $new_no = (int)$unique_id+1;
        }else{
            $new_no = 0001; // Starting No When No Data is Present
        }
        
        $test= $invoice_prefix.str_pad($new_no, 4, '0', STR_PAD_LEFT);
        
        $enquiery = new Enquiery();
        $enquiery->enqid = $test;
        $enquiery->full_name = $request->full_name;
        $enquiery->contact_number = $request->contact_number;
        $enquiery->address = $request->address;
        $enquiery->postcode = $request->postcode;
        $enquiery->assign_to = '1';
        // dd($enquiery);
        $enquiery->save();

        return redirect()->route('enquiries.index')->with('message','succesfully created your field');

    }


    public function edit($id)
    {
        
        

        $enquiery =Enquiery::find($id);

        $assign_to = $enquiery->assign_to;
       
        $page_data['assign_to'] =  $assign_to;
        $page_data['enquiery'] = $enquiery;
       // $data=User::all();
        $data =User::where('user_delete_status', 1)->get();
        $page_data['data'] = $data;

        return view('office-staff.enquiery.edit', compact('page_data'));
    }



    public function update(Request $request, $id)
    {
        //

          $enquiery=Enquiery::find($id);
        // dd($request->all());
          $enquiery_update = $enquiery->update($request->toArray());
        if ($enquiery_update) {

            if (isset($request->enquiery_status) and $request->enquiery_status == '0') {
                Session::flash('toasttype', 'success');
                Session::flash('toasttitle', 'Deleted');
                Session::flash('toastcontent', 'Enquiery  Details Deleted  Successfully');
            } else {

                Session::flash('toasttype', 'success');
                Session::flash('toasttitle', 'Success');
                Session::flash('toastcontent', 'Enquiery  Details updated Successfully');
            }
        } else {
            Session::flash('toasttype', 'error');
            Session::flash('toasttitle', 'Error');
            Session::flash('toastcontent', 'Enquiery  Details Not Updated');
        }

       
        
       
        return redirect()->route('enquiries.index');
    }

}
