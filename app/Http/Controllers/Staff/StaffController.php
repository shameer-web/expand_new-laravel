<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    //
     public function index()
    {
    	 // return "hiiii";
       return view('staff.home');
    }
}
