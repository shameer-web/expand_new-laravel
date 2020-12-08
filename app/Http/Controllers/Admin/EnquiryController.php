<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\User;
use App\Enquiery;
use DB;
class EnquiryController extends Controller
{
    public function index()
    {
        //

            $user =User::where('user_delete_status', 1)->where('role',3)->get();
            // $data = DB::table('enquieries')
            //  ->join('users', 'enquieries.assign_to', '=', 'users.id')
            //  ->select('enquieries.*', 'users.name')
            //  ->where('enquiery_status', 1)
            //  ->get();

             $data =Enquiery::where('enquiery_status', 1)->get();

             return view('admin.enquiery.index')->with('data',$data)->with('user',$user);
    }


     public function create()
    {
        //

        $data =User::where('user_delete_status', 1)->get();
        $page_data['data']=$data;
       // $page_data['title']="Create Vendor";
        //$page_data['role']=3;

        return view('admin.enquiery.create',compact('page_data'));
       
    }



     public function store(Request $request)
    {   
        //dd($request->all());
        $invoice_prefix="ENQ-N";
        // $invoice = Enquiery::select('id', 'enqid')->orderBy('id', 'desc')->first();
        $invoice = Enquiery::orderBy('id', 'desc')->first();
        
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
        $enquiery->state = $request->state;
        $enquiery->assign_to = '0';
        $enquiery->date = $request->date;
        // dd($enquiery);
        $enquiery->save();

        return redirect()->route('enquiry.index')->with('message','succesfully created your field');

    }


    public function edit($id)
    {
        
        

        $enquiery =Enquiery::find($id);

        $assign_to = $enquiery->assign_to;
       
        $page_data['assign_to'] =  $assign_to;
        $page_data['enquiery'] = $enquiery;
       // $data=User::all();
        // $data =User::where('user_delete_status', 1)->get();
        $data =User::where('user_delete_status', 1)->where('role', '!=' , 1)->get();
        $page_data['data'] = $data;

        return view('admin.enquiery.edit', compact('page_data'));
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

       
        
       
        return redirect()->route('enquiry.index');
    }

}
