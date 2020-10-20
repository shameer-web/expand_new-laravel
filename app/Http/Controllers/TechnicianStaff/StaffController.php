<?php

namespace App\Http\Controllers\TechnicianStaff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    //
     public function index()
    {
    	 // return "hiiii";
       return view('technician-staff.home');
    }
}
