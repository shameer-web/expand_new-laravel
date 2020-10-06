<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Complaint;

class ComplaintController extends Controller
{
    //

    public function index(){
        //return "hii";
         $complaint =Complaint::where('complaint_status', 1)->get();
    	return view('admin.complaint.index')->with('complaint',$complaint);
    }

    public function store(Request $request)
    {
    	//dd($request->all());

    	$complaint = new Complaint();
    	$complaint->complaint_id =$request->complaint_id;
    	$complaint->complaint =$request->complaint;
    	$complaint->customer_name =$request->customer_name;

    	$complaint->save();

    	 return redirect()->route('complaint.index')->with('message','succesfully created your field');
    }


    public function create(){
    	return view('admin.complaint.create');
    }

    public function edit($id){


    	   $complaint =Complaint::find($id);

       
      
       
        $page_data['complaint'] = $complaint;
       // $data=User::all();

        return view('admin.complaint.edit', compact('page_data'));
    }


    public function update(Request $request ,$id){


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

       
        
       
        return redirect()->route('complaint.index');

    }
}
