<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use App\InvoiceImage;

class InvoiceImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $data = InvoiceImage::where('invoice_image_status',1)->get();
        //dd($data);
        return view('admin.invoice_image.index')->with('data',$data);

           

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('admin.invoice_image.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //


       // dd($request->all());


        $name = time() . '.' . $request->file('image')->extension();

        $path = $request->file('image')->storeAs('invoice_image', $name);
        if ($path) {
            $request['invoice_image'] = $name;
            $create =  InvoiceImage::create($request->toArray());
            if ($create) {
                Session::flash('toasttype', 'success');
                Session::flash('toasttitle', 'Created');
                Session::flash('toastcontent', 'New Logo Created  Successfully');
            } else {
                Session::flash('toasttype', 'danger');
                Session::flash('toasttitle', 'Cant Create');
                Session::flash('toastcontent', 'Technical Issue Image Transfered');
            }
        } else {
            Session::flash('toasttype', 'danger');
            Session::flash('toasttitle', 'Cant Create');
            Session::flash('toastcontent', 'Technical Issue Image Not Transfered');
        }

        return redirect()->route('invoice_image.index');
















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
    public function edit(InvoiceImage $invoice_image)
    {
        //

        $edit =$invoice_image;

        return view('admin.invoice_image.edit')->with('edit',$edit);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InvoiceImage $invoice_image)
    {
        //
           //dd($request->all());
          //dd($invoice_image);


           if ($request->hasFile('image')) {

            $name = time() . '.' . $request->file('image')->extension();

            $path = $request->file('image')->storeAs('invoice_image', $name);
            if ($path) {

                $request['invoice_image'] = $name;
            }
        } elseif (isset($request->invoice_old_image)) {

            $request['invoice_image'] = $request['invoice_old_image'];
        }

        $cardholder_update = $invoice_image->update($request->toArray());
        if ($cardholder_update) {

            if (isset($request->invoice_image_status) and $request->invoice_image_status == '0') {
                Session::flash('toasttype', 'success');
                Session::flash('toasttitle', 'Deleted');
                Session::flash('toastcontent', 'Logo Deleted  Successfully');
            } else {

                Session::flash('toasttype', 'success');
                Session::flash('toasttitle', 'Success');
                Session::flash('toastcontent', 'Logo updated Successfully');
            }
        } else {
            Session::flash('toasttype', 'error');
            Session::flash('toasttitle', 'Error');
            Session::flash('toastcontent', 'Logo Not Updated');
        }

          //dd($category);
      // dd($cardholder_update);
       return redirect()->route('invoice_image.index');
 
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
