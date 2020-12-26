<?php

namespace App\Http\Controllers\TechnicianStaff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Enquiery;
use App\Complaint;
use Auth;
use DB;

class StaffController extends Controller
{
    //
     public function index()
    {
    	 // return "hiiii";

        $tech = Auth::user()->id;
           //dd($tech);

        $user =User::where('user_delete_status', 1)->where('role',3)->get();

        $status = Enquiery::where('enquiery_status', 1)->get();

        foreach($status as $stat){

        $res = Enquiery::where('enquiery_status', 1)->where('status', 0);
        
        if ($stat->assign_to ==$tech ){
        $res->where('assign_to',$tech);
        $data = $res->count();
        }

        else{
              $res->where('assist_by',$tech);
              $data = $res->count();
        }
        }

       // dd($data);




      
    
            $status1 = Complaint::where('complaint_status', 1)->get();

            foreach($status1 as $stat){
           



              $res = Complaint::where('complaint_status', 1)->where('status', 0);
        
        if ($stat->staff ==$tech ){
        $res->where('staff',$tech);
        $com = $res->count();
        }

        else{
              $res->where('assist_by',$tech);
              $com = $res->count();
        }
        }


             //dd($com);

             

       return view('technician-staff.home')->with('user',$user)->with('data',$data)->with('com',$com);
    }
}
