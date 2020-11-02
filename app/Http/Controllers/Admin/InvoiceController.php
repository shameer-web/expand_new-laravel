<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    //

    public function index(){

    }
    public function create()
    {
    	return view('admin.invoice.create');
    }
}
