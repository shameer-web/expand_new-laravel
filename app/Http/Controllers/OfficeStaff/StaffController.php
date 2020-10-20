<?php

namespace App\Http\Controllers\OfficeStaff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    //

     public function index()
    {
    	 // return "hiiii";
       return view('office-staff.home');
    }
}
