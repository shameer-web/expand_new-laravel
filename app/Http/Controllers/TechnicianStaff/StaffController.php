<?php

namespace App\Http\Controllers\TechnicianStaff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Enquiery;
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
           
             $data =Enquiery::where('enquiery_status', 1)->where('assign_to',$tech)->where('status', 0)->count();
             //dd($data);

             

       return view('technician-staff.home')->with('user',$user)->with('data',$data);
    }
}
