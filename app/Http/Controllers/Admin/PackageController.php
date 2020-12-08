<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Package;
use App\Gst;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

         $package= Package::where('package_status', 1)->get();
          return view('admin.package.index')->with('package',$package);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $gst = Gst::where('gst_status',1)->first();
         return view('admin.package.create')->with('gst',$gst);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       //dd($request->all());
       //  if($request->gst){
       // $abc =($request->gst[0]+$request->gst[1]+$request->gst[2]);
       //  }
       //  dd($abc);


        $total_tax =$request->tax5 + $request->tax6 + $request->tax7;
       // dd($total_tax);
        //dd($request->package_price + $total_tax);
         
        $package =new Package();
        $package->package_name = $request->package_name;

        $package->package_type = $request->package_type;
        $package->package_duration = $request->package_duration;
        $package->package_price = $request->package_price;
        $package->cgst = $request->tax5;
        $package->sgst = $request->tax6;
        $package->cess = $request->tax7;
        $package->total_tax =$total_tax;

        $package->gst = $request->tax;
        $package->package_amount = $request->package_amount;
        $package->total_amount = $request->package_price + $total_tax;

        $package->save();

        //return "hiii";
         return redirect()->route('package.index')->with('message','succesfully created your field');





       
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
    public function edit(Package $package)
    {
        //
      
        $page_data['package'] = $package;
      

        return view('admin.package.edit', compact('page_data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Package $package)
    {
        //




             $package_update = $package->update($request->toArray());
        if ( $package_update) {

            if (isset($request->package_status) and $request->package_status == '0') {
                Session::flash('toasttype', 'success');
                Session::flash('toasttitle', 'Deleted');
                Session::flash('toastcontent', 'Package  Details Deleted  Successfully');
            } else {

                Session::flash('toasttype', 'success');
                Session::flash('toasttitle', 'Success');
                Session::flash('toastcontent', 'Package  Details updated Successfully');
            }
        } else {
            Session::flash('toasttype', 'error');
            Session::flash('toasttitle', 'Error');
            Session::flash('toastcontent', 'Package  Details Not Updated');
        }

       
        
       
        return redirect()->route('package.index');

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
